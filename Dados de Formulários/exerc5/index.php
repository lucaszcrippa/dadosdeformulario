<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Verificador de Número</title>
</head>
<body>

<h2>Verificar se o número é Par ou Ímpar</h2>

<form method="POST">
    <label>Digite um número:</label>
    <input type="number" name="numero" required>
    <br><br>

    <button type="submit">Verificar</button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero = $_POST["numero"];

    if ($numero % 2 == 0) {
        echo "<h3>Par</h3>";
    } else {
        echo "<h3>Ímpar</h3>";
    }

}

?>

</body>
</html>