<?php

$valores = [];


if(empty($_GET)) {
    echo "Se ha recibido valor nulo<br>";
} else {
    foreach ($_GET as $clave => $valor) {
        $valores[$clave] = $valor;
    }
    foreach ($valores as $clave => $valor) {
        if ($valor == is_numeric($valor)) {
            echo " Se ha recibido un número <br>";
        } elseif ($valor == "null") {
            echo " No se ha recibido ningún dato o es un valor nulo <br>";
        } elseif ($valor == is_string($valor)) {
            echo " Se ha recibido una cadena de caracteres <br>";
        }
    }
}

?>
