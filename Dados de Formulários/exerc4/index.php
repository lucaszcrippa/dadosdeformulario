<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculadora Simples</title>
</head>
<body>

<h2>Calculadora</h2>

<form method="POST">
    <label>Número 1:</label>
    <input type="number" name="num1" required>
    <br><br>

    <label>Número 2:</label>
    <input type="number" name="num2" required>
    <br><br>

    <label>Operação:</label>
    <select name="operacao">
        <option value="somar">Somar</option>
        <option value="subtrair">Subtrair</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="dividir">Dividir</option>
    </select>
    <br><br>

    <button type="submit">Calcular</button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacao = $_POST["operacao"];

    if ($operacao == "somar") {
        $resultado = $num1 + $num2;
    } elseif ($operacao == "subtrair") {
        $resultado = $num1 - $num2;
    } elseif ($operacao == "multiplicar") {
        $resultado = $num1 * $num2;
    } elseif ($operacao == "dividir") {
        if ($num2 != 0) {
            $resultado = $num1 / $num2;
        } else {
            $resultado = "Erro: divisão por zero";
        }
    }

    echo "<h3>Resultado: $resultado</h3>";
}

?>

</body>
</html>