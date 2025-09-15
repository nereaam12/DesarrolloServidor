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

foreach ($posicion as $num => $p) {
    if (in_array($p, ["primero", "tercero", "quinto"], true)) {
        $sum += $num;
        echo "Estás en una posición impar $sum <br>";
        if ($sum > 20) {
            echo "El valor de la suma es mayor que 20 <br>";
        } elseif ($sum > 10) {
            echo "El valor de la suma es mayor que 10 <br>";
        } elseif ($sum > 5) {
            echo "El valor de la suma es mayor que 5 <br>";
        } else {
            echo "El valor de la suma no es mayor <br>";
        }
        $impar = true;
        $par = false;
    } elseif (in_array($p, ["segundo", "cuarto", "sexto"], true)) {
        $sum += $num;
        echo "Estás en una posición par $sum <br>";
        if ($sum > 20) {
            echo "El valor de la suma es mayor que 20 <br>";
        } elseif ($sum > 10) {
            echo "El valor de la suma es mayor que 10 <br>";
        } elseif ($sum > 5) {
            echo "El valor de la suma es mayor que 5 <br>";
        } else {
            echo "El valor de la suma no es mayor <br>";
        }
        $impar = false;
        $par = true;
    }
}


?>
