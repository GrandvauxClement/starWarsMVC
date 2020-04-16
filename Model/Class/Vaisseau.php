<?php 
    class Vaisseau {
        private $id;
        private $name;
        private $armement;
        private $allegiance;
        private $key_fact;
        private $image;

        public function __construct($id=null, $name, $armement, $allegiance, $key_fact, $image)
        {
            $this->id = $id;
            $this->name = $name;
            $this->armement = $armement;
            $this->allegiance = $allegiance;
            $this->key_fact = $key_fact;
            $this->image = $image;
        }

        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getArmement()
        {
            return $this->armement;
        }

        public function getAllegiance()
        {
            return $this->allegiance;
        }

        public function getKey_fact()
        {
            return $this->key_fact;
        }

        public function getImage()
        {
            return $this->image;
        }
    }