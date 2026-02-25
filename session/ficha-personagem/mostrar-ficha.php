<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ficha</h1>
    <p>Nome: <?php echo $_SESSION["nome"]?></p>
    <p>Classe: <?php echo $_SESSION["classe"]?></p>
    <br>
    <a href="editar-ficha.php">Editar ficha</a>
   
</body>
</html>