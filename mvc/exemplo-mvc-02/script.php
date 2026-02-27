<?php
$nome = isset($_POST['nome'])? $_POST['nome']:'';
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
<p>Digite seu nome que eu vou te cumprimentar.</p>
<form action="script.php" method="post">
    <label>Nome:</label>
    <input type="text" name="nome">
    <input type="submit" name="btEnviar" value="Enviar">
</form>

<?php 
    if(isset($_POST['nome'])) {
        echo "<p>Olá, ".$nome."!</p>";
    }
?>

</body>
</html>