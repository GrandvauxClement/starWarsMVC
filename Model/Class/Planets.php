<?php
    class Planets {
        private $id;
        private $name;
        private $status;
        private $terrain;
        private $allegiance;
        private $key_fact;
        private $image;

        public function __construct($id=null,$name,$status,$terrain,$allegiance,$key_fact,$image)
        {
            $this->id = $id;
            $this->name = $name;
            $this->status = $status;
            $this->terrain = $terrain;
            $this->allegiance = $allegiance;
            $this->key_fact = $key_fact;
            $this->image = $image;
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getName(){
            return $this->name;
        }

        public function getStatus(){
            return $this->status;
        }

        public function getTerrain(){
            return $this->terrain;
        }

        public function getAllegiance(){
            return $this->allegiance;
        }

        public function getKey_fact(){
            return $this->key_fact;
        }

        public function getImage(){
            return $this->image;
        }
    }