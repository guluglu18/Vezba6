<?php
    class Poruke{
        public static $pi = 3.14;
        public static function greskaKonekcija(){
            echo "<div style='background-color: red; color: white; width: 300px; margin:5px;'>Greska prilikom konekcije na bazu</div>";
        }
        public static function uspesnoSnimanje(){
            echo "<div style='background-color: green; color: black; width: 200px; margin:5px;'>Uspesno ste snimili podatke</div>";
        }
        public static function customPoruka($poruka){
            echo "<div style='background-color: blue; color: white; width: 200px; margin:5px;   '>$poruka</div>";
        }
       
    }
?>