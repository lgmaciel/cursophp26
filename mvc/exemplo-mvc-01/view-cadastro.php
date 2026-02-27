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
    <title>Document</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form action="ctrl-cadastro.php" method="post">
        <label>Nome do personagem: </label>
        <br>
        <input type="text" name="nome" value=<?php echo $nome?>>
        <br>
        <label>Classe: </label>
        <br>
        <input type="text" name="classe" value=<?php echo $classe?>>
        <br>
        
        <input type="submit" value="Cadastrar">
        <br>
        <a href="view-ficha.php">Ver ficha atual do personagem</a>
    </form>
</body>
</html>