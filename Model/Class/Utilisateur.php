<?php
    class Utilisateur{
        private $id;
        private $login;
        private $nom;
        private $prenom;
        private $password;

        public function __construct($id=null, $login, $nom, $prenom, $password)
        {
            $this->id =$id;
            $this->login =$login;
            $this->nom = $nom;
            $this->prenom =$prenom;
            $this->password = $password;
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getLogin(){
            return $this->login;
        }

        public function getNom(){
            return $this->nom;
        }

        public function getPrenom(){
            return $this->prenom;
        }

        public function getPassword(){
            return $this->password;
        }
    }