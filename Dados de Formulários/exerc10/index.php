<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulário Completo</title>
</head>
<body>

<h2>Cadastro Completo</h2>

<form method="POST">

    <!-- Nome -->
    <label>Nome:</label>
    <input type="text" name="nome" required>
    <br><br>

    <!-- Email -->
    <label>Email:</label>
    <input type="email" name="email" required>
    <br><br>

    <!-- Senha -->
    <label>Senha:</label>
    <input type="password" name="senha" required>
    <br><br>

    <!-- Idade -->
    <label>Idade:</label>
    <input type="number" name="idade" required>
    <br><br>

    <!-- Sexo -->
    <label>Sexo:</label><br>
    <input type="radio" name="sexo" value="Masculino" required> Masculino <br>
    <input type="radio" name="sexo" value="Feminino"> Feminino <br>
    <input type="radio" name="sexo" value="Outro"> Outro
    <br><br>

    <!-- Cidade -->
    <label>Cidade:</label>
    <select name="cidade" required>
        <option value="Sapucaia">Sapucaia</option>
        <option value="Esteio">Esteio</option>
        <option value="São Leopoldo">São Leopoldo</option>
        <option value="Porto Alegre">Porto Alegre</option>
    </select>
    <br><br>

    <!-- Linguagens favoritas -->
    <label>Linguagens favoritas:</label><br>
    <input type="checkbox" name="linguagens[]" value="HTML"> HTML <br>
    <input type="checkbox" name="linguagens[]" value="CSS"> CSS <br>
    <input type="checkbox" name="linguagens[]" value="JavaScript"> JavaScript <br>
    <input type="checkbox" name="linguagens[]" value="PHP"> PHP <br>
    <input type="checkbox" name="linguagens[]" value="Java"> Java <br><br>

    <button type="submit">Cadastrar</button>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"]; // normalmente não exibimos a senha
    $idade = $_POST["idade"];
    $sexo = $_POST["sexo"];
    $cidade = $_POST["cidade"];
    $linguagens = isset($_POST["linguagens"]) ? $_POST["linguagens"] : [];

    echo "<h3>Cadastro realizado com sucesso!</h3>";
    echo "Nome: $nome <br>";
    echo "Email: $email <br>";
    echo "Idade: $idade <br>";
    echo "Sexo: $sexo <br>";
    echo "Cidade: $cidade <br><br>";

    echo "Linguagens favoritas:<br>";
    if (!empty($linguagens)) {
        foreach ($linguagens as $linguagem) {
            echo $linguagem . "<br>";
        }
    } else {
        echo "Nenhuma selecionada.";
    }
}

?>

</body>
</html>