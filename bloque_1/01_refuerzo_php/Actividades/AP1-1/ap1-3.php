<?php

$puesto = [
    1 => "primero",
    3 => "segundo",
    5 => "tercero",
    7 => "cuarto",
    9 => "quinto",
    11 => "sexto",
];

$sum = 0;

foreach ($puesto as $num => $puest){
    if($puest == "primero" || $puest == "tercero" || $puest == "quinto"){
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
    elseif ($puest == "segundo" || $puest == "cuarto" || $puest == "sexto"){
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
