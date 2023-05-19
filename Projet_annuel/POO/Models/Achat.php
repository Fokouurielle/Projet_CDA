<?php

class Achat
{
     /* --
     * Déclaration des propriétés de notre classe Achat.
     -- */
    private $id_achat;
    private $date_achat;
    private $qte_achat;
    private $prix_achat;
    private $mode_paiement;


    /**
     * Pour permettre l'attribution de valeurs
     * à mes propriétés, je vais mettre en place
     * un CONSTRUCTEUR.
     * -----------------------------------------
     * L'objectif du constructeur, c'est de remplir
     * d'initialiser, d'hydrater les propriétés
     * de ma classe. IL DOIT ETRE PUBLIC.
     * -----------------------------------------
     * Cette fonction est executée AUTOMATIQUEMENT
     * par PHP au moment de l'instanciation.
     */

    public function __construct($id_achat, $date_achat, $qte_achat, $prix_achat, $mode_paiement)
    {
        $this->id_achat = $id_achat;
        $this->date_achat = $date_achat;
        $this->qte_achat = $qte_achat;
        $this->prix_achat = $prix_achat;
        $this->mode_paiement = $mode_paiement;
    }

    /**
     * déclaration des methodes ou fonctions
     */
    public function getId_achat()
    {
        return $this->id_achat;
    }

    public function setId_achat($id_achat)
    {
        $this->id_achat = $id_achat;
    } 

    public function getDate_achat()
    {
        return $this->date_achat;
    }

    public function setDate_achat($date_achat)
    {
        $this->date_achat = $date_achat;
    }

    public function getQte_achat()
    {
        return $this->qte_achat;
    }

    public function setQte_achat($qte_achat)
    {
        $this->qte_achat = $qte_achat;
    }

    public function getPrix_achat()
    {
        return $this->prix_achat;
    }

    public function setPrix($prix_achat)
    {
        $this->prix_achat = $prix_achat;
    }
     
    public function getMode_paiement()
    {
        return $this->mode_paiement;
    }

    public function setMode_Paiement($mode_paiement)
    {
        $this->mode_paiement = $mode_paiement;
    }  
    
}
  
?>