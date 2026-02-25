<?php
    session_start();
    if(isset($_SESSION["acessos"])){
        $_SESSION["acessos"]++;
    }else{
        $_SESSION["acessos"] = 1;
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <h1>Home Page</h1>
    Quantidade de acessos:    
    <input type="text" value="<?php echo $_SESSION["acessos"]?>">
    <br>
    <a href="contador.php">Atualizar contador</a>
    <br>
    <a href="outra-pagina.php">Ir para outra página</a>
</body>
</html>