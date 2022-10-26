<?php
    $sexo = $_GET["sexo"];
    $edad = $_GET["edad"];

    if(($sexo=="m")&&($edad<63)){
        echo " no puede jubilarse ";
    }else{if(($sexo == "f")&&($edad<54)){
        echo " no puede jubilarse ";
    }else{
        echo " puede jubilarse ";
    }
}
?>