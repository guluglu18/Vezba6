<?php
    class Ljudi{
        private $ime;
        private $prezime;
        private $jmbg;

        //KONSTRUKTOR
        public function __construct($a, $b, $c){
            $this -> ime = $a;
            $this -> prezime = $b;
            $this -> jmbg = $c;
            echo "Objekat kreiran!<br>";
        }

        //SETERI
        public function __set($name, $value){
            $this ->  $name = $value;
        }

        //GETERI
        public function __get($name){
            return $this -> $name;
        }

        //TO STRING ZA ISPIS OBJEKTA
        public function __toString(){
            return $this -> ime." ".$this -> prezime." (".$this -> jmbg.")<br>";
        }

        //DESTRUKTOR 
        public function __destruct(){
            echo "Objekat unisten!<br>";
        }
    }

    //pravljenje instance klase - OBJEKAT
    $obj = new Ljudi("Bosko", "Bogojevic", 1234567);

    //zbog SETERA smo mogli da PROMENIMO vrednosti podataka
    $obj -> ime = "Mile";
    $obj -> prezime = "Milenkovic";
    $obj -> jmbg = 2222222;

    //zbog GETERA smo mogli da PROCITAMO podatke i ispisemo 
    echo $obj -> ime."<br>";
    echo $obj -> prezime."<br>";
    echo $obj -> jmbg."<br>";

    //Stampanje celog objekta uz pomoc toString metode
    echo $obj;


?>