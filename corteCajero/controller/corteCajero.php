<?php

    class corteCajero{
        /*private $idCorte;
        private $idUser;
        private $fechaCorte;

        public function __construct($idCorte, $idUser, $fechaCorte){
            $this->idCorte = $idCorte;
            $this->idUser = $idUser;
            $this->fechaCorte = $fechaCorte;
        }*/

        public function getIdCorte() {
            return $this->idCorte;
        }

        public function getIdUser() {
            return $this->idUser;
        }

        public function getFechaCorte() {
            return $this->fechaCorte;
        }

        public function setIdCorte($idCorte) {
            $this->idCorte = $idCorte;
            return $this;
        }

        public function setIdUser($idUser) {
            $this->idUser = $idUser;
            return $this;
        }

        public function setFechaCorte($fechaCorte) {
            $this->fechaCorte = $fechaCorte;
            return $this;
        }
    }

?>