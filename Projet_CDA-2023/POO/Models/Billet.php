<?php

class Billet {
    private $num_billet;
    private $date_emission;
    private $classe;
    private $montant;
    private $siege;

  
    public function __construct($num_billet, $date_emission, $classe, $montant, $siege) {
      $this->num_billet = $num_billet;
      $this->date_emission = $date_emission;
      $this->classe = $classe;
      $this->montant = $montant;
      $this->siege = $siege;
    }
  
    public function getNum_billet()
    {
        return $this->num_billet;
    }

    public function setNum_billet($num_billet)
    {
        $this->num_billet = $num_billet;
    }

    public function getDate_emission()
    {
        return $this->data_emission;
    }

    public function setDate_emission($data_emission)
    {
        $this->data_emission = $data_emission;
    }

    public function getClasse()
    {
        return $this->classe;
    }

    public function setClasse($classe)
    {
        $this->classe = $classe;
    }

    public function getMontant()
    {
        return $this->montant;
    }

    public function setMontant($montant)
    {
        $this->montant = $montant;
    }

    public function getSiege()
    {
        return $this->siege;
    }

    public function setSiege($siege)
    {
        $this->siege = $siege;
    }
    
  }

?>