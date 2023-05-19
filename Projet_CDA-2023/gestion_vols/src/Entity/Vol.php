<?php

namespace App\Entity;

use App\Repository\VolRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VolRepository::class)]
class Vol
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $ville_depart = null;

    #[ORM\Column(length: 255)]
    private ?string $ville_arrivee = null;

    #[ORM\Column(length: 255)]
    private ?string $date_depart = null;

    #[ORM\Column(length: 255)]
    private ?string $date_arrivee = null;

    #[ORM\Column(length: 255)]
    private ?string $heure_depart = null;

    #[ORM\Column(length: 255)]
    private ?string $heure_arrivee = null;

    #[ORM\Column]
    private ?int $prix = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVilleDepart(): ?string
    {
        return $this->ville_depart;
    }

    public function setVilleDepart(string $ville_depart): self
    {
        $this->ville_depart = $ville_depart;

        return $this;
    }

    public function getVilleArrivee(): ?string
    {
        return $this->ville_arrivee;
    }

    public function setVilleArrivee(string $ville_arrivee): self
    {
        $this->ville_arrivee = $ville_arrivee;

        return $this;
    }

    public function getDateDepart(): ?string
    {
        return $this->date_depart;
    }

    public function setDateDepart(string $date_depart): self
    {
        $this->date_depart = $date_depart;

        return $this;
    }

    public function getDateArrivee(): ?string
    {
        return $this->date_arrivee;
    }

    public function setDateArrivee(string $date_arrivee): self
    {
        $this->date_arrivee = $date_arrivee;

        return $this;
    }

    public function getHeureDepart(): ?string
    {
        return $this->heure_depart;
    }

    public function setHeureDepart(string $heure_depart): self
    {
        $this->heure_depart = $heure_depart;

        return $this;
    }

    public function getHeureArrivee(): ?string
    {
        return $this->heure_arrivee;
    }

    public function setHeureArrivee(string $heure_arrivee): self
    {
        $this->heure_arrivee = $heure_arrivee;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

   
}
