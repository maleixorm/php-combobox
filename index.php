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
            <option value="">Selecione um estado</option>
            <?php while ($estado = $query_estados->fetch_assoc()) { ?>
                <option <?php if(isset($_GET['estado']) && $_GET['estado'] == $estado['id']) echo "selected"; ?> value="<?= $estado['id'] ?>"><?= $estado['nome'] ?></option>
            <?php } ?>
        </select>
        <?php if(isset($_GET['estado'])) { ?>
            <select name="cidade" required>
                <option value="">Selecione a cidade</option>
                <?php 
                    $estado_selecionado = $conn->real_escape_string($_GET['estado']);
                    $sql_cidades = "SELECT * FROM cidades WHERE id_estado = '$estado_selecionado'";
                    $query_cidades = $conn->query($sql_cidades) or die($conn->error);
                    while ($cidade = $query_cidades->fetch_assoc()) { ?>
                        <option <?php if(isset($_GET['cidade']) && $_GET['cidade'] == $cidade['id']) echo "selected"; ?> value="<?= $cidade['id'] ?>"><?= $cidade['nome'] ?></option>
                    <?php } ?>
            </select> 
        <?php } ?> 
        <button type="submit">Avançar</button>
    </form>
</body>
</html>