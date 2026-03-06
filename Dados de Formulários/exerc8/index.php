<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Seleção de Cidade</title>
</head>
<body>

<h2>Formulário de Cidade</h2>

<form method="POST">
    <label>Nome:</label>
    <input type="text" name="nome" required>
    <br><br>

    <label>Cidade:</label>
    <select name="cidade" required>
        <option value="Sapucaia">Sapucaia</option>
        <option value="Esteio">Esteio</option>
        <option value="São Leopoldo">São Leopoldo</option>
        <option value="Porto Alegre">Porto Alegre</option>
    </select>
    <br><br>

    <button type="submit">Enviar</button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $cidade = $_POST["cidade"];

    echo "<h3>$nome mora em $cidade</h3>";
}

?>

</body>
</html>