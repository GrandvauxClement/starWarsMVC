<?php 
    class PlanetsController {

        public function delete($id)
        {
            $planetsController = new PlanetsManager();
            $planetsController->delete($id);
            header('Location: ../starWarsMVC/index.php?controller=default&action=home');
        }

        public function detail($id)
        {
            $planetsManager = new PlanetsManager;
            $planet = $planetsManager->select($id);
            require 'View/planetDetail_view.php';
        }

        public function addPlanet()
        {
            $allegiances=[
                'Clan Fett',
                'Commerce Guild',
                'Confederacy of Independant Systems',
                'Corporate Alliance',
                'Dark Lords of the Sith',
                'Death Watch',
                'First Order',
                'Free Ryloth movement',
                'Galactic Empire',
                'Galactic Republic',
                'Gungan Grand Army',
                'Hutts',
                'Intergalactic Banking Clan',
                'Jedi Order',
                'Lothal Rebels',
                'Mandalorian Clans',
                'Nightbrothers',
                'Nightsisters',
                'Nite Owls',
                'Rebel Alliance',
                'Shadow Collective',
                'The Resistance',
                'Techno Union',
                'Trade Federation',
                'Tusken Raiders',
                'Twi\'lek Freedom Fighters'
            ];
            require 'View/addPlanet_view.php';
        }
        public function addPlanetDone()
        {
            $imageUrl = null;
            $allowedExtension = ['image/png','image/jpeg','image/gif'];
            if(in_array($_FILES['image']['type'],$allowedExtension)){
                if($_FILES['image']['size'] < 80000000){
                    $extension = explode('/', $_FILES['image']['type'])[1];
                    $imageUrl = uniqid().'.'.$extension;
                    move_uploaded_file($_FILES['image']['tmp_name'],'images/planets/'.$imageUrl);
                }
    
            } 
            $planet = new Planets(null, $_POST['name'], $_POST['status'], $_POST['terrain'], $_POST['allegiance'], $_POST['key_fact'], $imageUrl);
            $planetsController = new PlanetsManager();
            $planetsController->addPlanet($planet);
            header('Location: ../starWarsMVC/index.php?controller=default&action=home');
        }

        public function updatePlanet($id)
        {
            $allegiances=[
                'Clan Fett',
                'Commerce Guild',
                'Confederacy of Independant Systems',
                'Corporate Alliance',
                'Dark Lords of the Sith',
                'Death Watch',
                'First Order',
                'Free Ryloth movement',
                'Galactic Empire',
                'Galactic Republic',
                'Gungan Grand Army',
                'Hutts',
                'Intergalactic Banking Clan',
                'Jedi Order',
                'Lothal Rebels',
                'Mandalorian Clans',
                'Nightbrothers',
                'Nightsisters',
                'Nite Owls',
                'Rebel Alliance',
                'Shadow Collective',
                'The Resistance',
                'Techno Union',
                'Trade Federation',
                'Tusken Raiders',
                'Twi\'lek Freedom Fighters'
            ];
            $planetsController = new PlanetsManager();
            $planet = $planetsController->select($id);
            require 'View/updatePlanet_view.php';
        }

        public function updatePlanetdone($id)
        {
            if($_FILES['image']['size']== 0)
            {
                $planetsController = new PlanetsManager();
                $planet = $planetsController->select($id);
                $imageUrl= $planet->getImage();
            }
            else {
                $imageUrl = null;
                $allowedExtension = ['image/png','image/jpeg','image/gif'];
                if(in_array($_FILES['image']['type'],$allowedExtension)){
                    if($_FILES['image']['size'] < 80000000){
                        $extension = explode('/', $_FILES['image']['type'])[1];
                        $imageUrl = uniqid().'.'.$extension;
                        move_uploaded_file($_FILES['image']['tmp_name'],'images/planets/'.$imageUrl);
                }
            } 
            }

            $planet = new Planets($id, $_POST['name'], $_POST['status'], $_POST['terrain'], $_POST['allegiance'], $_POST['key_fact'], $imageUrl);
            $planetsController = new PlanetsManager();
            $planetsController->update($planet);
            header('Location: ../starWarsMVC/index.php?controller=default&action=home');

        }
    }