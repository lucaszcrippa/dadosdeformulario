<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Escolha de Sexo</title>
</head>
<body>

<h2>Formulário</h2>

<form method="POST">
    <label>Nome:</label>
    <input type="text" name="nome" required>
    <br><br>

    <label>Sexo:</label><br>
    <input type="radio" name="sexo" value="Masculino" required> Masculino <br>
    <input type="radio" name="sexo" value="Feminino"> Feminino <br>
    <input type="radio" name="sexo" value="Outro"> Outro
    <br><br>

    <button type="submit">Enviar</button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $sexo = $_POST["sexo"];

    echo "<h3>Resultado</h3>";
    echo "Nome: $nome <br>";
    echo "Sexo selecionado: $sexo";
}

?>

</body>
</html>