<?php
    require_once("klase/classPoruke.php");
    echo Poruke::$pi."<br>";
    echo Poruke::greskaKonekcija();
    echo Poruke::uspesnoSnimanje();
    echo Poruke::customPoruka("Cao, ja sam u Caviaru i ucim PVAP");
?>