<?php
class Vol {
    private $id_vol;
    private $ville_depart;
    private $ville_arrivee;
    private $date_depart;
    private $date_arrivee;
    private $heure_depart;
    private $heure_arrivee;
    private $prix;
  
    // Constructeur
    public function __construct($id_vol, $ville_depart, $ville_arrivee, $date_depart, $date_arrivee, $heure_depart, $heure_arrivee, $prix) {
        $this->id_vol = $id_vol;
        $this->ville_depart = $ville_depart;
        $this->ville_arrivee = $ville_arrivee;
        $this->date_depart = $date_depart;
        $this->date_arrivee = $date_arrivee;
        $this->heure_depart = $heure_depart;
        $this->heure_arrivee = $heure_arrivee;
        $this->prix = $prix;
    }
     // Getters
     public function getId_vol() {
        return $this->id_vol;
    }

    public function getVille_depart() {
        return $this->ville_depart;
    }

    public function getVille_arrivee() {
        return $this->ville_arrivee;
    }

    public function getDate_depart() {
        return $this->date_depart;
    }

    public function getDate_arrivee() {
        return $this->date_arrivee;
    }

    public function getHeure_depart() {
        return $this->heure_depart;
    }

    public function getHeure_arrivee() {
        return $this->heure_arrivee;
    }

    public function getPrix() {
        return $this->prix;
    }

    // Setters
    public function setId_vol($id_vol) {
        $this->id = $id_vol;
    }

    public function setVille_depart($ville_depart) {
        $this->ville_depart = $ville_depart;
    }

    public function setVille_arrivee($ville_arrivee) {
        $this->ville_arrivee = $ville_arrivee;
    }

    public function setDate_depart($date_depart) {
        $this->date_depart = $date_depart;
    }

    public function setDate_arrivee($date_arrivee) {
        $this->date_arrivee = $date_arrivee;
    }


    public function setHeure_depart($heure_depart) {
        $this->heure_depart = $heure_depart;
    }

    public function setHeure_arrivee($heure_arrivee) {
        $this->heure_arrivee = $heure_arrivee;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
    }

    // Méthodes
    public function afficherDetails() {
        echo "<b>Vol numéro : </b>" . $this->id_vol . "<br>";
        echo "<b>Départ : </b>" . $this->ville_depart . "<br>";
        echo "<b>Arrivée : </b>" . $this->ville_arrivee . "<br>";
        echo "<b>Date de départ : </b>" . $this->date_depart . "<br>";
        echo "<b>Date d'arrivée : </b>" . $this->date_arrivee . "<br>";
        echo "<b>Heure de départ : </b>" . $this->heure_depart . "<br>";
        echo "<b>Heure d'arrivée : </b>" . $this->heure_arrivee . "<br>";
        echo "<b>Prix : </b>" . $this->prix . " €<br>";
    }

    public function calculerDuree() {
        // Code pour calculer la durée du vol en heures et minutes
        $duree = strtotime($this->heure_arrivee) - strtotime($this->heure_depart);
        
    }  

}
?>