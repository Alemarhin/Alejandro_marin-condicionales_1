<?php
    $capital = $_GET["capital"];
    $int1 = $capital * 2/100;
    $int2 = $capital * 4.5/100;
    $int3 = $capital * 7/100;
    $totgan1 = $capital + $int1;
    $totgan2 = $capital + $int2;
    $totgan3 = $capital + $int3;
    if ($capital<499){
        echo " su interes mensual es de ".$int1. " pesos. su capital con interes al mes sera de ".$totgan1. " pesos. " ;
    }else{
        if(($capital>=500)&&($capital<1500)){
            echo " su interes mensual es de ".$int2. " pesos. su capital con interes al mes sera de ".$totgan2. " pesos. ";
        }
    }if($capital>=1500){
        echo " su interes mensual es de ".$int3. " pesos. su capital con interes al mes sera de ".$totgan3. " pesos.";
    }

    
?>