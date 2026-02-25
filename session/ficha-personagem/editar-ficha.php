<?php
session_start();
if(!isset($_SESSION["nome"]) || !isset($_SESSION["classe"])){
    $_SESSION["nome"] = "";
    $_SESSION["classe"] = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar ficha</h1>
    <form action="salvar-ficha.php" method="post">
        <label for="nome">Nome:</label>
        <input value="<?php echo $_SESSION["nome"]?>" type="text" id="nome" name="nome"><br><br>

        <label for="classe">Classe:</label>
        <input value="<?php echo $_SESSION["classe"]?>" type="text" id="classe" name="classe"><br><br>

        <input type="submit" value="Salvar">
    </form>
</body>
</html>