<?php

namespace App\Controller;

use App\CustomsClass\ResponseMessage;
use App\Entity\Admin;
use App\Repository\AdminRepository;
use Exception;
use Firebase\JWT\JWT;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\Constraints as Assert;
use App\DBAL\EnumStatusType;
use App\Utils\Helpers;

/**
 * Class AuthenticationController
 * @package App\Controller
 * @Route("api/auth", name="authentication")
 */
class AuthenticationController extends AbstractController
{
    private $adminRepository;
    private $responseMessage;
    private $helpers;
    private $urlAdmin;
    const ADMIN_LOGIN_PATH = "auth";
    public function __construct(
        AdminRepository $adminRepository,
        ResponseMessage $responseMessage,
        Helpers $helpers
    ) {
        $this->responseMessage = $responseMessage;
        $this->helpers = $helpers;
        $this->adminRepository = $adminRepository;

        if ($_ENV['APP_ENV'] == 'dev') {
            $this->urlAdmin = $_ENV['URL_DEV'];
        } else {
            $this->urlAdmin = $_ENV['URL_PROD'];
        }
    }

    /**
     * @Route("/register", name="register", methods={"POST"})
     * @param Request $request
     * @param SerializerInterface $serializable
     * @param UserPasswordEncoderInterface $encoder
     * @return JsonResponse
     */
    public function register(
        Request $request,
        SerializerInterface $serializable,
        UserPasswordEncoderInterface $encoder,
        ValidatorInterface $validator
    ): JSONResponse {

        /* On récupère le tableau d'objet ayant les informations de l'utilisateur */
        $req = $request->getContent();
        /* On désérialise le tableau $data au format JSON en mettant la classe Admin comme référence */
        $item = $serializable->deserialize($req, Admin::class, 'json');

        //Validation donnée
        $errors = $validator->validate($item);

        if (count($errors) > 0) {
            //on recupere les messages d'erreurs
            $messages = "";
            foreach ($errors as $violation) {
                $messages .= $violation->getPropertyPath() . " : " . $violation->getMessage();
            }

            $this->responseMessage->setData($messages);
            $this->responseMessage->setSuccess(false);
            $this->responseMessage->setMessage("code 1");
            return new JsonResponse($this->responseMessage, JsonResponse::HTTP_BAD_REQUEST);
        }
        $emailConstraint = new Assert\Email();
        // all constraint "options" can be set this way
        $emailConstraint->message = 'Invalid email address';

        // use the validator to validate the value
        $errors1 = $validator->validate(
            $item->getEmail(),
            $emailConstraint
        );
        if (0 < count($errors1)) {
            $this->responseMessage->setData($emailConstraint->message);
            $this->responseMessage->setSuccess(false);
            $this->responseMessage->setMessage('code 1');
            return new JsonResponse($this->responseMessage, JsonResponse::HTTP_BAD_REQUEST);
        }


        $info = $this->adminRepository->formatDataUser($item, $encoder);


        // On vérifie si l'utilisateur existe déjà dans le système

        $eml = $this->adminRepository->findOneBy([
            'email' => $item->getEmail()
        ]);

        $telExists = $this->adminRepository->findOneBy([
            'telPrincipal' => $item->getTelPrincipal()
        ]);

        // On essaie d'enregistrer l'utilisateur
        if ($eml  === null && $telExists  === null) {

            $m = $this->adminRepository->AddUpdateAdmin($info);

            if ($m === true) {

                $this->responseMessage->setSuccess(true);
                $this->responseMessage->setMessage("code 4");
                return new JsonResponse($this->responseMessage, JsonResponse::HTTP_CREATED);
            } else {
                $this->responseMessage->setSuccess(false);
                $this->responseMessage->setMessage("code 6");
                return new JsonResponse($this->responseMessage, JsonResponse::HTTP_FORBIDDEN);
            }
        } else {
            if ($eml != null)
                $this->responseMessage->setData("Adresse e-mail existe deja");
            else
                $this->responseMessage->setData("Numero de telephone existe deja");
            $this->responseMessage->setSuccess(false);
            $this->responseMessage->setMessage("code 2");
            return new JsonResponse($this->responseMessage, JsonResponse::HTTP_BAD_REQUEST);
        }
    }


    /**
     * @Route("/login", name="login", methods={"POST"})
     * @param Request $request
     * @param SerializerInterface $serializable
     * @return JsonResponse
     */
    public function login(
        Request $request,
        SerializerInterface $serializable,
        MailerInterface $mailer
    ): JsonResponse {
        /* On désérialise le tableau $data au format JSON en mettant la classe Admin comme référence */
        $item = $serializable->deserialize($request->getContent(), Admin::class, 'json');

        $user = $this->adminRepository->findOneBy(['email' => $item->getEmail()]);


        if ($user !== null) {

            if (password_verify(base64_decode($item->getPassword()), $user->getPassword())) {

                $payload = $this->adminRepository->payload($user);

                $token = $this->json($this->adminRepository->getTokenUser($payload, $this->getParameter('jwt_secret')));

                $response[]  = json_decode($token->getContent(), true);
                $tokenLogin  = json_decode($token->getContent(), true);
                $result = array(
                    $response, "role" => $user->getRole(), "etatPwd" => $user->getEtatChangePwd(),
                    "username" => $user->getNom()  . ' ' . $user->getPrenom()
                );

                $this->adminRepository->addToken($tokenLogin['token'], $user);

                $this->responseMessage->setData($result);
                $this->responseMessage->setSuccess(true);
                $this->responseMessage->setMessage('code 4');

                return new JsonResponse($this->responseMessage, JsonResponse::HTTP_OK);
            } else {
                $this->responseMessage->setData("Mot de passe incorrect");
                $this->responseMessage->setSuccess(false);
                $this->responseMessage->setMessage("code 10");
                return new JsonResponse($this->responseMessage, JsonResponse::HTTP_NOT_FOUND);
            }
        } else {
            $this->responseMessage->getData();
            $this->responseMessage->setSuccess(false);
            $this->responseMessage->setMessage("code 10");
            return new JsonResponse($this->responseMessage, JsonResponse::HTTP_NOT_FOUND);
        }
    }
    
    /**
     * @Route("/logout/{id}", name="logout", methods={"GET"}, requirements={"id"="\d+"})
     * @param Request $request
     * @param SerializerInterface $serializable
     * @return JsonResponse
     */
    public function logout(
        Request $request,
        MailerInterface $mailer
    ): JsonResponse {
        if (
            $request->headers->has('Authorization')
        ) {
            // On extrait le token s'il existe dans les headers
            $credentials = str_replace('Bearer ', '', $request->headers->get('Authorization'));

            //ici on recupère l'id pour avoir les informations des utilisateurs
            $cleanParams = json_decode($this->json($this->adminRepository->getAttributes($request))->getContent(), true);

            try {
                $decodetoken = JWT::decode($credentials, $this->getParameter('jwt_secret'), ['HS256']);
            } catch (Exception $e) {

                $this->responseMessage->getData();
                $this->responseMessage->setSuccess(false);
                $this->responseMessage->setMessage('code 9');
                return new JsonResponse($this->responseMessage, JsonResponse::HTTP_UNAUTHORIZED);
            }

            $res = $this->adminRepository->findOneBy([
                'id' => $this->adminRepository->IdOptimusDecode($cleanParams['id']),
                'statut' => EnumStatusType::STATUS_TRUE
            ]);

            if ($res !== null) {

                $item = $this->adminRepository->removeToken($res);


                if ($item === true) {
                    $this->responseMessage->getData();
                    $this->responseMessage->setSuccess(true);
                    $this->responseMessage->setMessage('code 4');
                    return new JsonResponse($this->responseMessage, JsonResponse::HTTP_OK);
                } else {
                    $this->responseMessage->getData();
                    $this->responseMessage->setSuccess(false);
                    $this->responseMessage->setMessage('code 6');
                    return new JsonResponse($this->responseMessage, JsonResponse::HTTP_FORBIDDEN);
                }
            } else {
                $this->responseMessage->getData();
                $this->responseMessage->setSuccess(false);
                $this->responseMessage->setMessage('code 10');
                return new JsonResponse($this->responseMessage, JsonResponse::HTTP_NOT_FOUND);
            }
        } else {
            $this->responseMessage->setData("Connexion perdu. Veuillez vous reconnecter");
            $this->responseMessage->setSuccess(false);
            $this->responseMessage->setMessage('code 9');
            return new JsonResponse($this->responseMessage, JsonResponse::HTTP_UNAUTHORIZED);
        }
    }
}
