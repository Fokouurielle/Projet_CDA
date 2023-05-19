<?php

class Client {
    private $id_client;
    private $nom;
    private $prenom;
    private $sexe;
    private $telephone;
    private $email;
    private $password;
  
    public function __construct($id_client, $nom, $prenom, $sexe, $telephone, $email, $password ) {
      $this->id = $id_client;
      $this->nom = $nom;
      $this->prenom = $prenom;
      $this->sexe = $sexe;
      $this->telephone = $telephone;
      $this->email = $email;
      $this->password = $password;
    }
  

    //  les getters et les setters en PHP sont utilisés pour permettre l'accès contrôlé aux propriétés privées des objets d'une classe, garantir l'intégrité des données et effectuer des traitements spécifiques sur les données.
    public function getId_client() {
      return $this->id_client;
    }
  
    public function setId_client($id_client) {
        $this->id_client = $id_client;
      }

    public function getNom() {
      return $this->nom;
    }
  
    public function setNom($nom) {
        $this->nom = $nom;
      }

    public function getPrenom() {
      return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
      }

    public function getSexe() {
        return $this->sexe;
      }
  
    public function setSexe($sexe) {
        $this->sexe = $sexe;
      }

    public function getTelephone() {
        return $this->telephone;
      }

    public function setTelephone($telephone) {
        $this->telephone = $telephone;
      }

    public function getEmail() {
      return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
      }

      public function getPassword() {
        return $this->password;
      }
  
    public function setPassword($password) {
        $this->password = $password;
        }
  }

?>