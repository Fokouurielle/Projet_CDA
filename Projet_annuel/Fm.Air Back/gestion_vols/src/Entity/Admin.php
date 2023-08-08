<?php

namespace App\Entity;

use App\DBAL\EnumRoleType;
use App\Repository\AdminRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=AdminRepository::class)
 * @UniqueEntity(fields={"email", "telPrincipal"})
 */
class Admin implements UserInterface
{
    const ROLES = [
        EnumRoleType::ROLE_CLIENT, EnumRoleType::ROLE_ADMIN
    ];

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200)
     * @Assert\NotBlank(message="Email is required.")
     * @Assert\NotNull(message="Email cant be null ")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=200)
     * @Assert\NotBlank(message="Nom is required.")
     * @Assert\NotNull(message="Nom cant be null ")
     * @Assert\Regex("/^\w+/")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="Password is required.")
     * @Assert\NotNull(message="Password cant be null ")
     */
    private $password;

    /**
     * @ORM\Column(type="enumRole")
     * @Assert\NotBlank(message="Role is required.")
     * @Assert\NotNull(message="Role cant be null ")
     * @Assert\Choice(choices=Admin::ROLES, message="Choisissez un role valide.")   
     */
    private $role;

    /**
     * @ORM\Column(type="string", length=300)
     * @Assert\NotNull(message="telPrincipal cant be null ")
     */
    private $telPrincipal;

    /**
     * @ORM\Column(type="enumStatus", options={"default":"5"})
     * @Assert\Length(min=1,max=1,exactMessage = " invalide.")
     * @Assert\Regex(pattern="/^(6|5)+([5-6]{0})$/",message=" invalide.")
     */
    private $etatChangePwd;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $tokenLogin;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return "";
    }

    public function setUsername(string $username): self
    {
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getTelPrincipal(): ?string
    {
        return $this->telPrincipal;
    }

    public function setTelPrincipal(string $telPrincipal): self
    {
        $this->telPrincipal = $telPrincipal;

        return $this;
    }

    public function getEtatChangePwd()
    {
        return $this->etatChangePwd;
    }

    public function setEtatChangePwd($etatChangePwd): self
    {
        $this->etatChangePwd = $etatChangePwd;

        return $this;
    }

    public function getTokenLogin(): ?string
    {
        return $this->tokenLogin;
    }

    public function setTokenLogin(?string $tokenLogin): self
    {
        $this->tokenLogin = $tokenLogin;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    //add for user interface
    public function getRoles()
    {
    }

    public function getUserIdentifier()
    {
    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }
    public function eraseCredentials()
    {
    }
}
