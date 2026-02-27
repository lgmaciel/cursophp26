<?php
$nome=$_GET['nome'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h1>Cumprimentador</h1>
    <?php
    echo "<h3>Olá, <span style='color:red'>". $nome ."</span>!</h3>";
    ?>
    <a href="view-de-entrada.html">Voltar para o início</a>
</body>
</html>