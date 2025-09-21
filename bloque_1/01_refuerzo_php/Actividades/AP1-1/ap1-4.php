<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Áreas</title>
</head>
<body>
<h1>Calculadora de Áreas</h1>
<form method="post" action="">
    <label for="figura">Elige la figura:</label>
    <select id="figura" name="figura">
        <option value="triangulo">Triángulo</option>
        <option value="rectangulo">Rectángulo</option>
        <option value="circulo">Círculo</option>
    </select>
    <br><br>

    <div id="valores">
        <label for="base">Base:</label>
        <input type="number" id="base" name="base" step="0.01">
        <br><br>
        <label for="altura">Altura:</label>
        <input type="number" id="altura" name="altura" step="0.01">
        <br><br>
        <label for="radio" style="display:none;">Radio:</label>
        <input type="number" id="radio" name="radio" step="0.01" style="display:none;">
    </div>

    <input type="submit" value="Calcular Área">
</form>

<?php
// Función para calcular el área de un triángulo
function calcularAreaTriangulo($base, $altura) {
    return ($base * $altura) / 2;
}

// Función para calcular el área de un rectángulo
function calcularAreaRectangulo($base, $altura) {
    return $base * $altura;
}

// Función para calcular el área de un círculo
function calcularAreaCirculo($radio) {
    return pi() * pow($radio, 2);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los valores enviados por el formulario
    $figura = $_POST['figura'];

    switch ($figura) {
        case "triangulo":
            $base = $_POST['base'];
            $altura = $_POST['altura'];
            $area = calcularAreaTriangulo($base, $altura);
            echo "<h3>El área del triángulo es: $area</h3>";
            break;

        case "rectangulo":
            $base = $_POST['base'];
            $altura = $_POST['altura'];
            $area = calcularAreaRectangulo($base, $altura);
            echo "<h3>El área del rectángulo es: $area</h3>";
            break;

        case "circulo":
            $radio = $_POST['radio'];
            $area = calcularAreaCirculo($radio);
            echo "<h3>El área del círculo es: $area</h3>";
            break;

        default:
            echo "<h3>Opción no válida.</h3>";
            break;
    }
}
?>
</body>
</html>