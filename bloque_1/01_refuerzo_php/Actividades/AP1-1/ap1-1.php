<?php

$datos = array();

if (isset($_GET)){
    $datos = $_GET;
}

foreach ($datos as $clave => $valor) {
    echo "Se ha recibido $valor para la clave $clave";
}
?>