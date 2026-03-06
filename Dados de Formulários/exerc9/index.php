<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Checkbox de Interesses</title>
</head>
<body>

<h2>Escolha as linguagens</h2>

<form method="POST">

    <input type="checkbox" name="linguagens[]" value="HTML"> HTML <br>
    <input type="checkbox" name="linguagens[]" value="CSS"> CSS <br>
    <input type="checkbox" name="linguagens[]" value="JavaScript"> JavaScript <br>
    <input type="checkbox" name="linguagens[]" value="PHP"> PHP <br>
    <input type="checkbox" name="linguagens[]" value="Java"> Java <br><br>

    <button type="submit">Enviar</button>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "<h3>Linguagens escolhidas:</h3>";

    if (!empty($_POST["linguagens"])) {

        $linguagens = $_POST["linguagens"];

        foreach ($linguagens as $linguagem) {
            echo $linguagem . "<br>";
        }

    } else {
        echo "Nenhuma linguagem selecionada.";
    }

}

?>

</body>
</html>