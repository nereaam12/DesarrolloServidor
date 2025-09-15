<?php

$datos = array();

if (isset($_GET)) {
    $datos = $_GET;

    var_dump($datos);
    foreach ($datos as $clave => $valor) {
        echo "Se ha recibido $valor para la clave $clave.<br>";
    }
}
?>