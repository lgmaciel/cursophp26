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
    <h1>Outra Página</h1>
    <p> 
        Você já acessou a Home Page: <?php echo $_SESSION["acessos"] ?>vezes.
    </p>
    
    
    <a href="contador.php">Voltar para a Home Page</a>

</body>
</html>