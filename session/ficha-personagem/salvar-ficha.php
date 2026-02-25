<?php
session_start();
if(isset($_POST["nome"]) && isset($_POST["classe"])){
    $_SESSION["nome"] = $_POST["nome"];
    $_SESSION["classe"] = $_POST["classe"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1>Ficha salva</h1>
    <a href="editar-ficha.php">Editar ficha</a> - 
    <a href="mostrar-ficha.php">Mostrar ficha</a>
</head>
<body>
    
</body>
</html>