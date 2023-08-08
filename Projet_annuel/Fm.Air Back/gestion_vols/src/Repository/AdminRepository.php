<?php

namespace App\Repository;

use App\DBAL\EnumStatusType;
use App\Entity\Admin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Firebase\JWT\JWT;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;

/**
 * @extends ServiceEntityRepository<Admin>
 *
 * @method Admin|null find($id, $lockMode = null, $lockVersion = null)
 * @method Admin|null findOneBy(array $criteria, array $orderBy = null)
 * @method Admin[]    findAll()
 * @method Admin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdminRepository extends ServiceEntityRepository
{
    protected $JWTManager;
    protected $adminRepository;
    protected $admin;
    protected $entityManager;

    public function __construct(
        ManagerRegistry $registry,
        JWTTokenManagerInterface $JWTManager
    ) {
        parent::__construct($registry, Admin::class);
        $this->JWTManager = $JWTManager;
        $this->admin = new Admin();
    }

    public function add(Admin $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Admin $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    /**
     * @param $item
     * @param $passwordEncoder
     * @return Admin
     * Formatage des données à inserer pour l'ajout d'un admin
     */
    public function formatDataUser(Admin $item, $passwordEncoder)
    {

        $this->admin->setEmail($item->getEmail());
        $this->admin->setNom($item->getNom());
        $this->admin->setPrenom($item->getPrenom());
        $this->admin->setPassword($passwordEncoder->encodePassword($this->admin, base64_decode($item->getPassword())));
        $this->admin->setRole($item->getRole());
        $this->admin->setTelPrincipal($item->getTelPrincipal());
        $this->admin->setCreatedAt(new \DateTime());
        $this->admin->setTokenLogin($item->getTokenLogin());
        $this->admin->setEtatChangePwd(EnumStatusType::STATUS_TRUE);
        return $this->admin;
    }

    /**
     * @param $item
     * @param $passwordEncoder
     * @param $newItem
     * @return mixed
     * Formatage des données à inserer pour la modification du password d'un admin
     */
    public function formatDataPassword(Admin $item, $pass, $passwordEncoder)
    {
        $item->setEtatChangePwd(EnumStatusType::STATUS_TRUE);
        $item->setPassword($passwordEncoder->encodePassword($item, base64_decode($pass)));
        $item->setUpdatedAt(new \DateTime());
        return $item;
    }

    /**
     * @param $admin
     * @return JsonResponse
     * On génère le token
     */
    public function getTokenUser($admin, $param)
    {
        $jwt = JWT::encode($admin, $param, 'HS256');

        return [
            'token' => sprintf('Bearer %s', $jwt)
        ];
    }

    /**
     * @param $item
     * @return bool|string
     * Ajout ou Mise à jour d'un admin
     */
    public function AddUpdateAdmin($item)
    {
        try {
            $item->setUpdatedAt(new \DateTime());
            $entityManager = $this->getEntityManager();
            $entityManager->persist($item);
            $entityManager->flush();

            return true;
        } catch (\Exception $e) {
            dd($e->getMessage());
            return 'Erreur :' . $e->getMessage();
        }
    }

    /**
     * @param $item
     * @return bool|string
     * On supprime l'admin'
     */
    public function removeAdmin(Admin $item)
    {
        try {
            $entityManager = $this->getEntityManager();
            $entityManager->remove($item);
            $entityManager->flush();
            return true;
        } catch (\Exception $e) {
            return 'Erreur :' . $e->getMessage();
        }
    }

    /**
     * @param $model
     * @return array
     * On construit le payload qui va intégrer le token
     */
    public function payload(Admin $model)
    {
        $data = [
            "id" => $model->getId(), // $model->getId(),
            "nom" => $model->getNom(),
            "prenom" => $model->getPrenom(),
            "etatPwd" => $model->getEtatChangePwd(),
            "email" => $model->getEmail(),
            "exp"  => (new \DateTime())->modify("+120 minutes")->getTimestamp(),
            "expS" => 120 * 60
        ];

        return $data;
    }

    /**
     * @param $userToken
     * @param $user
     * @return bool|string
     * On ajoute le token dans le champ tokenLogin
     * du admin qui se connecte ou s'enregistre
     */
    public function addToken($userToken, Admin $user)
    {
        try {
            $credentials = str_replace('Bearer ', '', $userToken);
            $user->setTokenLogin($credentials);
            $user->setUpdatedAt(new \DateTime());
            $entityManager = $this->getEntityManager();
            $entityManager->persist($user);
            $entityManager->flush();
            return true;
        } catch (\Exception $e) {
            return 'Erreur :' . $e->getMessage();
        }
    }

    /**
     * @param $attributes
     * @return false|string
     * On récupère les attributs pour avoir les paramètres
     */
    public function getAttributes($attributes)
    {
        return $attributes->attributes;
    }

    /**
     * @param $item
     * @return bool|string
     * On supprime le token d'un admin
     */
    public function removeToken(Admin $item)
    {
        try {
            $item->setTokenLogin('');
            $entityManager = $this->getEntityManager();
            $entityManager->persist($item);
            $entityManager->flush();

            return true;
        } catch (\Exception $e) {
            return 'Erreur :' . $e->getMessage();
        }
    }

    /**
     * @return mixed
     * Liste des admins 
     */
    public function fetchListOfAdmins()
    {
        return $this->createQueryBuilder('a')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return mixed
     * Get One admin
     */
    public function fetchOne($id)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();
    }

    /**
     * @param $item
     * @return array
     * Informations de l'utilisateur à renvoyer
     */
    public function adminResponse(Admin $item)
    {

        return [
            'nom' => $item->getNom(),
            'id' => $item->getId(), 
            'prenom' => $item->getPrenom(),
            'email' => $item->getEmail(),
            'telPrincipal' => $item->getTelPrincipal(),
            'role' => $item->getRole(),
            'createdAt' => $item->getCreatedAt(),
            'telPrincipal' => $item->getTelPrincipal()
        ];
    }

    /**
     * @param $item
     * @param $newItem
     * @return mixed
     * Formatage des données qui seront utilisées pour
     * la mise à jour du profil d'un utilisateur
     */
    public function formatDataToUpdate(Admin $item, $newItem)
    {
        foreach ($newItem as $key => $value) {
            if ($key == "nom")
                $item->setNom($value);
            if ($key == "prenom")
                $item->setPrenom($value);
            if ($key == "email")
                $item->setEmail($value);
            if ($key == "role")
                $item->setRole($value);
            if ($key == "telPrincipal")
                $item->setTelPrincipal($value);
        }

        $item->setUpdatedAt(new \DateTime());
        return $item;
    }

    public function findOneByEmail($email, $id): ?Admin
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.email = :email')
            ->andWhere('a.id != :id')
            ->setParameter('id', $id)
            ->setParameter('email', $email)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findOneByTelPrincipal($telPrincipal, $id): ?Admin
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.telPrincipal = :telPrincipal')
            ->andWhere('a.id != :id')
            ->setParameter('id', $id)
            ->setParameter('telPrincipal', $telPrincipal)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function countUser($role)
    {
        $qb =  $this->_em->createQueryBuilder();
        $qb
            ->select('count(p.id)')
            ->from('App\Entity\Admin', 'p')
            ->andWhere('p.role = :role')
            ->setParameter('role', $role);

        $res = $qb->getQuery()
            ->getSingleScalarResult();
        return $res;
    }

    //    /**
    //     * @return Admin[] Returns an array of Admin objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('a.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Admin
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
