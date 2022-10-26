<?php
    $preini = $_GET["preini"];
    $porven = $preini * 15 / 100;
    $prefin = $preini + $porven;
    echo " el precio al cual debe venderse el producto es de: ".$prefin. " con una ganacia de: ".$porven. " pesos.";

?>