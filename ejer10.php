<?php
    $valpagar = $_GET["valpago"];
    $valconpor = $valpagar * 20 / 100;
    $valtotal = $valpagar - $valconpor;
    if($valpagar>20000){
        echo " su valor a pagar tiene un 20% de descuento que equivale a ".$valconpor. " para pagar un total de ".$valtotal;
    }else{
        echo " su compra no tiene descuento ";
    }
?>