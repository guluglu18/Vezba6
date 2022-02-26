<?php
    class Ljudi{
        private $ime;
        private $prezime;
        private $jmbg;

    }
    class Radnik extends Ljudi{
        private $firma;
        private $brKnjizice;

        public function __construct($a, $b, $c, $d, $e){
            $this -> ime = $a;
            $this -> prezime = $b;
            $this -> jmbg = $c;
            $this -> firma = $d;
            $this -> brKnjizice = $e;
        }

        public function __toString(){
            return $this->ime." ".$this->prezime." (".$this->firma.")<br>";
        }
    }
    class Student extends Ljudi{
        private $skola;
        private $index;

        public function __construct($a, $b, $c, $d, $e){
            $this -> ime = $a;
            $this -> prezime = $b;
            $this -> jmbg = $c;
            $this -> skola = $d;
            $this -> index = $e;
        }
        public function __toString(){
            return $this->ime." ".$this->prezime." (".$this->skola.", ".$this->index.")<br>";
        }
    }
?>