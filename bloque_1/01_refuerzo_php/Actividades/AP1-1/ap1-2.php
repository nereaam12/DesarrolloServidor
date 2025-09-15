<?php

$valores = [];

if (empty($_GET)) {
    echo "No se ha recibido ningún dato o es un valor nulo<br>";
} else {
    foreach ($_GET as $clave => $valor) {
        $valores[$clave] = $valor;
    }

    foreach ($valores as $clave => $valor) {
        if ($valor === "" || strtolower($valor) === "null") {
            echo "No se ha recibido ningún dato o es un valor nulo<br>";
        } elseif (is_numeric($valor)) {
            echo "Se ha recibido un número<br>";
        } else {
            echo "Se ha recibido una cadena de caracteres<br>";
        }
    }
}
?>