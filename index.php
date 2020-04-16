<?php 
    session_start();
    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        require 'include.php';
        if ($_GET['controller']==='default' && $_GET['action']==='home')
        {
            $planetControler = new DefaultController();
            $planetControler->home();

        }
        else if ($_GET['controller']==='planet' && $_GET['action']==='delete' && isset($_GET['id']))
        {
            $planetControler = new PlanetsController();
            $planetControler->delete($_GET['id']);
        }
        else if ($_GET['controller'] === 'planet' && $_GET['action'] ==='addPlanet')
        {
            if($_SESSION['utilisateur']== null){
                header('Location: ../starWarsMVC/index.php?controller=login&action=connect');
            }
            else{
            $planetControler = new PlanetsController();
            $planetControler->addPlanet();
            }
        }
        else if ($_GET['controller'] === 'planet' && $_GET['action'] ==='addPlanetDone')
        {
            $planetControler = new PlanetsController();
            $planetControler->addPlanetDone();
        }
        else if ($_GET['controller'] === 'planet' && $_GET['action'] === 'update' && isset($_GET['id']))
        {
            $planetControler = new PlanetsController();
            $planetControler->updatePlanet($_GET['id']);
        }
        else if ($_GET['controller'] === 'planet' && $_GET['action'] === 'updatePlanetDone' && isset($_GET['id']))
        {
            $planetControler = new PlanetsController();
            $planetControler->updatePlanetdone($_GET['id']);
        }
        else if ($_GET['controller'] === 'planet' && $_GET['action'] === 'detail' && isset($_GET['id']))
        {
            $planetControler = new PlanetsController();
            $planetControler->detail($_GET['id']);
        }
        else if ($_GET['controller'] === 'vaisseau' && $_GET['action'] ==='addVaisseau')
        {
            if($_SESSION['utilisateur']== null){
                header('Location: ../starWarsMVC/index.php?controller=login&action=connect');
            }
            else{
                $vaisseauControler = new VaisseauxController();
                $vaisseauControler->addVaisseau();
            }
           
        }
        else if ($_GET['controller'] === 'vaisseau' && $_GET['action'] ==='addVaisseauDone')
        {
            $vaisseauControler = new VaisseauxController();
            $vaisseauControler->addVaisseauDone();
        }
        else if ($_GET['controller']==='vaisseau' && $_GET['action']==='delete' && isset($_GET['id']))
        {
            $vaisseauControler = new VaisseauxController();
            $vaisseauControler->delete($_GET['id']);
        }
        else if ($_GET['controller'] === 'vaisseau' && $_GET['action'] === 'update' && isset($_GET['id']))
        {
            $vaisseauControler = new VaisseauxController();
            $vaisseauControler->updateVaisseau($_GET['id']);
        }
        else if ($_GET['controller'] === 'vaisseau' && $_GET['action'] === 'updateVaisseauDone' && isset($_GET['id']))
        {
            $vaisseauControler = new VaisseauxController();
            $vaisseauControler->updateVaisseaudone($_GET['id']);
        }
        else if ($_GET['controller'] === 'vaisseau' && $_GET['action'] === 'detail' && isset($_GET['id']))
        {
            $vaisseauControler = new VaisseauxController();
            $vaisseauControler->detail($_GET['id']);
        }
        else if ($_GET['controller'] === 'login' && $_GET['action'] === 'connect')
        {
            $utilisateurController = new UtilisateurController();
            $utilisateurController->connect();
        }
        else if ($_GET['controller'] === 'login' && $_GET['action'] === 'connectDone')
        {
            $utilisateurController = new UtilisateurController();
            $utilisateurController->connectDone();
        }
        else if ($_GET['controller'] === 'login' && $_GET['action'] === 'home' && isset($_GET['id']))
        {
            $utilisateurController = new UtilisateurController();
            $utilisateurController->home($_GET['id']);
        }
        else if ($_GET['controller'] === 'login' && $_GET['action'] === 'disconnect')
        {
            $utilisateurController = new UtilisateurController();
            $utilisateurController->disconnect();
        }