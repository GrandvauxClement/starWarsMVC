<?php
    class PlanetsManager extends DbManager {

        public function __construct()
        {
            parent::__construct();
        }

        public function selectAll()
        {
            $planets = [];
            $sql = 'SELECT * FROM planets';
            foreach ($this->bdd->query($sql) as $row) {
                $planets[] = new Planets($row['id'], $row['name'], $row['status'], $row['terrain'], $row['allegiance'], $row['key_fact'], $row['image']);
            }
            return $planets;
        }

        public function delete($id)
        {
            $requete = $this->bdd->prepare("DELETE FROM planets where id = ?");
            $requete->bindParam(1,$id);
            $requete->execute();
        }

        public function addPlanet(Planets $planet)
        {
            $name = $planet->getName();
            $status = $planet->getStatus();
            $terrain = $planet->getTerrain();
            $allegiance = $planet->getAllegiance();
            $key_fact = $planet->getKey_fact();
            $image = $planet->getImage();
            $requete = $this->bdd->prepare("INSERT INTO planets (name, status, terrain, allegiance, key_fact, image) VALUES (?,?,?,?,?,?)");
            $requete->bindParam(1,$name);
            $requete->bindParam(2,$status);
            $requete->bindParam(3,$terrain);
            $requete->bindParam(4,$allegiance);
            $requete->bindParam(5,$key_fact);
            $requete->bindParam(6,$image);
            $requete->execute();
            $planet->setId($this->bdd->lastInsertId());
        }

        public function select($id){
            $requete = $this->bdd->prepare("SELECT * FROM planets WHERE id=?");
            $requete->bindParam(1,$id);
            $requete->execute();
            $res = $requete->fetch();
            $planet = new Planets($res['id'], $res['name'], $res['status'], $res['terrain'], $res['allegiance'], $res['key_fact'], $res['image']);
            return $planet;
        }

        public function update(Planets $planet)
        {
            $name = $planet->getName();
            $status = $planet->getStatus();
            $terrain = $planet->getTerrain();
            $allegiance = $planet->getAllegiance();
            $key_fact = $planet->getKey_fact();
            $image = $planet->getImage();
            $id = $planet->getId();
            $requete = $this->bdd->prepare("UPDATE planets SET name=?, status=?, terrain=?, allegiance=?, key_fact=?, image=? WHERE id=? ");
            $requete->bindParam(1,$name);
            $requete->bindParam(2,$status);
            $requete->bindParam(3,$terrain);
            $requete->bindParam(4,$allegiance);
            $requete->bindParam(5,$key_fact);
            $requete->bindParam(6,$image);
            $requete->bindParam(7,$id);
            $requete->execute();
        }
    }