<?php
    class VaisseauxManager extends DbManager 
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function selectAll()
        {
            $vaisseaux = [];
            $sql = 'SELECT * FROM vaisseaux';
            foreach ($this->bdd->query($sql) as $row) {
                $vaisseaux[] = new Vaisseau($row['id'], $row['name'], $row['armement'], $row['allegiance'], $row['key_fact'], $row['image']);
            }
            return $vaisseaux;
        }

        public function delete($id)
        {
            $requete = $this->bdd->prepare("DELETE FROM vaisseaux where id = ?");
            $requete->bindParam(1,$id);
            $requete->execute();
        }

        public function addVaisseau(Vaisseau $vaisseau)
        {
            $name = $vaisseau->getName();
            $armement = $vaisseau->getArmement();
            $allegiance = $vaisseau->getAllegiance();
            $key_fact = $vaisseau->getKey_fact();
            $image = $vaisseau->getImage();
            $requete = $this->bdd->prepare("INSERT INTO vaisseaux (name, armement, allegiance, key_fact, image) VALUES (?,?,?,?,?)");
            $requete->bindParam(1,$name);
            $requete->bindParam(2,$armement);
            $requete->bindParam(3,$allegiance);
            $requete->bindParam(4,$key_fact);
            $requete->bindParam(5,$image);
            $requete->execute();
            $vaisseau->setId($this->bdd->lastInsertId());
        }

        public function select($id){
            $requete = $this->bdd->prepare("SELECT * FROM vaisseaux WHERE id=?");
            $requete->bindParam(1,$id);
            $requete->execute();
            $res = $requete->fetch();
            $vaisseau = new Vaisseau($res['id'], $res['name'], $res['armement'], $res['allegiance'], $res['key_fact'], $res['image']);
            return $vaisseau;
        }

        public function update(Vaisseau $vaisseau)
        {
            $name = $vaisseau->getName();
            $armement = $vaisseau->getArmement();
            $allegiance = $vaisseau->getAllegiance();
            $key_fact = $vaisseau->getKey_fact();
            $image = $vaisseau->getImage();
            $id = $vaisseau->getId();
            $requete = $this->bdd->prepare("UPDATE vaisseaux SET name=?, armement=?, allegiance=?, key_fact=?, image=? WHERE id=? ");
            $requete->bindParam(1,$name);
            $requete->bindParam(2,$armement);
            $requete->bindParam(3,$allegiance);
            $requete->bindParam(4,$key_fact);
            $requete->bindParam(5,$image);
            $requete->bindParam(6,$id);
            $requete->execute();
        }
    }