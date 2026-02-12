<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $nome  = $_GET["nome"];
    $imagem = $_GET["imagem"];
    $marca = $_GET["marca"];
    $preco = $_GET["preco"];
    $cor   = $_GET["cor"];
    ?>
    <h1>Produto: <?php echo $nome?></h1>
    <img src= <?php echo "img/$imagem"?>>
    <ul>
        <li>Marca: <?php echo $marca?></li>
        <li>Preço: R$ <?php echo $preco?></li>
        <li>Cor: <?php echo $cor?></li>
    </ul>
    <a href="galeria-de-produtos.php">Voltar para a lista de produtos</a>
</body>
</html>