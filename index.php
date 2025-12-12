<?php

include("conexao.php");
$sql_estados = "SELECT * FROM estados ORDER BY nome ASC";
$query_estados = $conn->query($sql_estados) or die($conn->error);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combobox</title>
</head>
<body>
    <form action="" method="get">
        <select name="estado" required>
            <option value="" disabled>Selecione um estado</option>
        </select>
        <button type="submit">Avançar</button>
    </form>
</body>
</html>