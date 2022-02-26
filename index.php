<?php
    class Ljudi{
        public $x;
        protected $y;
        private $z;

        public function dodeliVrednost($vrednost){
            $this -> y = $vrednost;
        }
        public function procitajVrednost(){
            return $this -> y;
        }
    }
    $obj = new LjudI();
    $obj -> x = 5;
    echo "Vredost svojstva x u obj je: ".$obj -> x."<br>";
    $obj -> dodeliVrednost(10);
    echo "Vrednost svojstva y u obj je: ".$obj -> procitajVrednost()."<br>";
?>