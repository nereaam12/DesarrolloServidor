<?php

$posicion = [
    1 => "primero",
    3 => "segundo",
    5 => "tercero",
    7 => "cuarto",
    9 => "quinto",
    11 => "sexto",
];

$sum = 0;

$puesto = ;

foreach ($puesto as $num => $p){
    if($p == "primero" || $p == "tercero" || $p == "quinto"){
        $sum += $num;
        echo " Estas en una posicion impar $sum <br> ";
        if($sum > 20){
            echo " El valor de la suma es mayor que 20 <br> ";
        }elseif ($sum > 10){
            echo " El valor de la suma es mayor que 10 <br> ";
        }elseif ($sum > 5){
            echo " El valor de la suma es mayor que 5 <br>";
        }else echo " El valor de la suma no es mayor <br>";
        $impar = true;
        $par = false;
    }
    elseif ($p == "segundo" || $p == "cuarto" || $p == "sexto"){
        $sum += $num;
        echo " Estas en una posicion par $sum <br> ";
        if($sum > 20){
            echo " El valor de la suma es mayor que 20 <br>";
        }elseif ($sum > 10){
            echo " El valor de la suma es mayor que 10 <br> ";
        }elseif ($sum > 5){
            echo " El valor de la suma es mayor que 5 <br>";
        }else echo " El valor de la suma no es mayor <br> ";
        $impar = false;
        $par = true;
    }
}


?>
