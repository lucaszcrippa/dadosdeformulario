<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro Simples</title>
</head>
<body>

<h2>Formulário de Cadastro</h2>

<form method="POST">
    <label>Nome:</label>
    <input type="text" name="nome" required>
    <br><br>

    <label>Email:</label>
    <input type="email" name="email" required>
    <br><br>

    <label>Idade:</label>
    <input type="number" name="idade" required>
    <br><br>

    <button type="submit">Cadastrar</button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];

    echo "<h3>Cadastro realizado com sucesso!</h3>";
    echo "Nome: $nome <br>";
    echo "Email: $email <br>";
    echo "Idade: $idade";
}

?>

</body>
</html>