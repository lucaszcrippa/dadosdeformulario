<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulário Nome e Idade</title>
</head>
<body>

<h2>Formulário</h2>

<form method="POST">
    <label>Nome:</label>
    <input type="text" name="nome" required>
    <br><br>

    <label>Idade:</label>
    <input type="number" name="idade" required>
    <br><br>

    <button type="submit">Enviar</button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    echo "Nome: $nome <br>";
    echo "Idade: $idade anos <br><br>";

    if ($idade >= 18) {
        echo "Você é maior de idade";
    } else {
        echo "Você é menor de idade";
    }

}

?>

</body>
</html>