<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Primeiro Formulário</title>
</head>
<body>

<h2>Formulário</h2>

<form method="POST">
    <label>Nome:</label>
    <input type="text" name="nome" required>
    
    <button type="submit">Enviar</button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];

    echo "<p>Olá, $nome!</p>";

}

?>

</body>
</html>