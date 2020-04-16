<?php
    class UtilisateurManager extends DbManager {

        public function __construct()
        {
            parent::__construct();
        }

        public function login($login, $password)
        {
            $errors=[];
            try {
                $passwordCrypt = md5($password);
                $requete = $this->bdd->prepare('SELECT * FROM utilisateur where login=? and password= ?');
                $requete->bindParam(1,$login);
                $requete->bindParam(2,$passwordCrypt);
                $requete->execute();
            }
            catch(PDOException $e){
                var_dump($e->getMessage());
                die();
            }
            $res = $requete->fetch();
            if($res == false){
                $errors[] = 'Utilisateur inconnue';
            }
            else {
                $_SESSION['utilisateur']= $res;
            }
            return $errors;
        }

        public function select($id){
            $requete = $this->bdd->prepare("SELECT * FROM utilisateur WHERE id=?");
            $requete->bindParam(1,$id);
            $requete->execute();
            $res = $requete->fetch();
            $utilisateur = new Utilisateur($res['id'], $res['login'], $res['nom'], $res['prenom'], $res['password']);
            return $utilisateur;
        }
    }