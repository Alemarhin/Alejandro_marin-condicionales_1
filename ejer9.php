<?php
    $nombre = $_GET["nombre"];
    $asignatura = $_GET["asignatura"];
    $not1 = $_GET["nota1"];
    $not2 = $_GET["nota2"];
    $not3 = $_GET["nota3"];
    $n1 = $not1;
    $n2 = $not2;
    $n3 = $not3;
    $porn1 = $n1 * 100 /30;
    $porn2 = $n2 * 100 /30;
    $porn3 = $n3 * 100 /40;
    $porcentaje = ($porn1 + $porn2 + $porn3)/3;
    $suporcen = ($n1 + $n2 + $n3)/3;
    if($suporcen>=4){
        echo " su nombre es ".$nombre. " su nota en " .$asignatura. " es ".$suporcen." su estado es aprobado con un porcentaje de ".$porcentaje. " %. ";
    }else{
        echo " su nombre es ".$nombre. " su nota en " .$asignatura. " es ".$suporcen. " su estado es reprobado con un porcentaje de ".$porcentaje. " %. ";
    }
?>