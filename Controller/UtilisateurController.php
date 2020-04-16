<?php
    class UtilisateurController{
        
        public function connect(){
            require 'View/userConnect_view.php';
        }

        public function connectDone()
        {
                $utilisateurManager = new UtilisateurManager();
                $login = $_POST['login'];
                $password = $_POST['password'];
                $errors = $utilisateurManager->login($login, $password);
                
                if(count($errors) == 0)
                {
                    header('Location: ../starWarsMVC/index.php?controller=login&action=home&id='.$_SESSION['utilisateur']['id']);
                }
               
        }

        public function home($id)
        {   
            $utilisateurManager = new UtilisateurManager;
            $utilisateur = $utilisateurManager->select($id);
            require 'View/homeAdmin_view.php';
        }

        public function disconnect()
        {
            session_destroy();
            header('Location: ../starWarsMVC/index.php?controller=default&action=home');
        }
    }