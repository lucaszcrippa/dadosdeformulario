<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Soma de Dois Números</title>
</head>
<body>

<h2>Soma de dois números</h2>

<form method="POST">
    <label>Número 1:</label>
    <input type="number" name="num1" required>
    <br><br>

    <label>Número 2:</label>
    <input type="number" name="num2" required>
    <br><br>

    <button type="submit">Calcular</button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    $resultado = $num1 + $num2;

    echo "<h3>Resultado da soma: $resultado</h3>";
}

?>

</body>
</html>