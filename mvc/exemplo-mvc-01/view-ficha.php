<?php
//iniciar/recuperar sessão
session_start();
$nome = isset($_SESSION['nome']) ? $_SESSION['nome'] : '';
$classe = isset($_SESSION['classe'])? $_SESSION['classe'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha do personagem</title>
</head>
<body>
    <h1>Ficha do personagem</h1>
    <p>NOME</p>
    <p><?php echo $nome?></p>
    <p>CLASSE</p>
    <p><?php echo $classe?></p>
    <a href="view-cadastro.php">Voltar para cadastro</a>
</body>
</html>