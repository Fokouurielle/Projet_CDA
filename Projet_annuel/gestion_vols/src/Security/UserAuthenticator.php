<?php
// <!-- ce fichier sert a gerer les authentification des utilisateurs. 
// il est utilisé pour un objet qui implémente l'interface qui represente l'utilisateur connecté 
// Le fichier est responsable de la vérification de l'identité de l'utilisateur, de la création d'un token d'authentification.
// en bref ce fichier aide à sécuriser l'accès aux ressources protégées de l'application en s'assurant que seul les utilisateurs authentifier peuvent y accéder-->

// <!-- Il permet la connexion et la navigation de manière sécurisée. -->

// <!-- useAuthenticator est un fichier qui permet de gérer l'authentification d'un 
// utilisateur à l'aide de la fonctionnalité Symfony Security. -->

namespace App\Security; /*indique la partie du projet où se trouve le fichier useAuthenticator. il est situé dans le dossier "Security" de l'application.*/

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface; /*Cette ligne permet d'importer la classe TokenInterface, qui est utilisée pour représenter un jeton d'authentification dans Symfony Security.*/
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class UserAuthenticator extends AbstractLoginFormAuthenticator /* Cette ligne indique que la classe UserAuthenticator est une sous-classe de la classe AbstractLoginFormAuthenticator de Symfony Security, qui fournit une implémentation par défaut de l'authentification par formulaire. */
{
    use TargetPathTrait; /* permet d'avoir un nombre d'informations*/

    public const LOGIN_ROUTE = 'app_login';

    public function __construct(private UrlGeneratorInterface $urlGenerator)
    {
    }

    public function authenticate(Request $request): Passport //Passport est l'objet par defaut qui permet de recupérer l'authentification de utilisateurs
    {
        $email = $request->request->get('email', '');

        $request->getSession()->set(Security::LAST_USERNAME, $email);

        return new Passport(
            new UserBadge($email),
            new PasswordCredentials($request->request->get('password', '')),
            [
                new CsrfTokenBadge('authenticate', $request->request->get('_csrf_token')),
            ]
        );
    }

    // Redirection après le login selon le role du user
    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
            return new RedirectResponse($targetPath);
        }    /*Cette fonction est appelée lorsqu'un utilisateur est authentifié avec succès, et peut être utilisée pour effectuer des opérations supplémentaires (par exemple, redirection vers une autre page). */

        // return new RedirectResponse($this->urlGenerator->generate('admin_home'));
        return new RedirectResponse($this->urlGenerator->generate('app_test'));
        //throw new \Exception('TODO: provide a valid redirect inside '.__FILE__);
    }

    /* La fonction "getLoginUrl" sert à renvoyer l'URL de la page de connexion. Cette fonction est généralement appelée lorsque l'utilisateur n'est pas authentifié et doit se connecter pour accéder à certaines pages protégées. Cette fonction retourne l'URL de la page de connexion pour que l'utilisateur puisse être redirigé vers celle-ci pour effectuer l'authentification.*/
   
    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }
}
