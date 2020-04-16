<?php 
    class VaisseauxController {

        public function delete($id)
        {
            $vaisseauxController = new VaisseauxManager();
            $vaisseauxController->delete($id);
            header('Location: ../starWarsMVC/index.php?controller=default&action=home');
        }

        public function detail($id)
        {
            $vaisseauxManager = new VaisseauxManager;
            $vaisseau = $vaisseauxManager->select($id);
            require 'View/vaisseauDetail_view.php';
        }

        public function addVaisseau()
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
            require 'View/addVaisseau_view.php';
        }
        public function addVaisseauDone()
        {
            $imageUrl = null;
            $allowedExtension = ['image/png','image/jpeg','image/gif'];
            if(in_array($_FILES['image']['type'],$allowedExtension)){
                if($_FILES['image']['size'] < 80000000){
                    $extension = explode('/', $_FILES['image']['type'])[1];
                    $imageUrl = uniqid().'.'.$extension;
                    move_uploaded_file($_FILES['image']['tmp_name'],'images/vaisseaux/'.$imageUrl);
                }
    
            } 
            $vaisseau = new Vaisseau(null, $_POST['name'], $_POST['armement'], $_POST['allegiance'], $_POST['key_fact'], $imageUrl);
            $vaisseauController = new VaisseauxManager();
            $vaisseauController->addVaisseau($vaisseau);
            header('Location: ../starWarsMVC/index.php?controller=default&action=home');
        }

        public function updateVaisseau($id)
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
            $vaisseauManager = new VaisseauxManager();
            $vaisseau = $vaisseauManager->select($id);
            require 'View/updateVaisseau_view.php';
        }

        public function updateVaisseaudone($id)
        {
         
            // Comme ça il sera selectionné
           
            if($_FILES['image']['size'] == 0)
            {
                $vaisseauManager = new VaisseauxManager();
                $vaisseau = $vaisseauManager->select($id);
                $imageUrl= $vaisseau->getImage();    
            }
            else {
                // tu passes ici ... donc ton vaisseau n'est pas selectionné c'est normal ;) 

                $imageUrl = null;
                $allowedExtension = ['image/png','image/jpeg','image/gif'];
                if(in_array($_FILES['image']['type'],$allowedExtension)){
                    if($_FILES['image']['size'] < 80000000){
                        $extension = explode('/', $_FILES['image']['type'])[1];
                        $imageUrl = uniqid().'.'.$extension;
                        move_uploaded_file($_FILES['image']['tmp_name'],'images/vaisseaux/'.$imageUrl);
                }
            } 
            }
          
            $vaisseau = new Vaisseau($id, $_POST['name'], $_POST['armement'], $_POST['allegiance'], $_POST['key_fact'], $imageUrl);
            $vaisseauController = new VaisseauxManager();
            $vaisseauController->update($vaisseau);
            header('Location: ../starWarsMVC/index.php?controller=default&action=home');

        }
    }