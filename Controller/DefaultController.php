<?php 
    class DefaultController {

        public function home()
        {
            $planetsManager = new PlanetsManager();
            $planets = $planetsManager->selectAll();
            $vaisseauManager = new VaisseauxManager();
            $vaisseaux = $vaisseauManager->selectAll();
            require 'View/home_view.php';
        }
    }