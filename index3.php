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
            //echo "Objekat kreiran!<br>";
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
            //echo "Objekat unisten!<br>";
        }
    }
    //pravljenje niza objekata
    $osobe = array();
    $osobe[] = new Ljudi("Nikola", "Bogojevic", 11111111); 
    $osobe[] = new Ljudi("Pera", "Peric", 2222222); 
    $osobe[] = new Ljudi("Dule", "Dulovic", 33333333); 
    $osobe[] = new Ljudi("Nikola", "Nikoloc", 444444444); 
    $osobe[] = new Ljudi("Stefan", "Stefanovic", 555555555); 

    //ispis osoba uz pomoc FOR petlje
    for($i = 0; $i<count($osobe); $i++){
        echo $osobe[$i];
    }
    echo "<hr>";

    //ispis zaposlenih uz pomoc FOREACH petlje
    foreach($osobe as $osoba){
        echo $osoba;
    }

    echo "<hr>";

    //ispis osoba koje se zovu NIKOLA
    foreach($osobe as $osoba){
        if($osoba -> ime == "Nikola")echo $osoba;
    }
?>