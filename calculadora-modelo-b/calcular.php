<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$op = $_POST['op'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php
    switch ($op) {
        case 'somar':
            $resultado = $num1 + $num2;
            echo "<p>A soma de $num1 e $num2 é: $resultado</p>";
            break;
        case 'subtrair':
            $resultado = $num1 - $num2;
            echo "<p>A subtração de $num1 e $num2 é: $resultado</p>";
            break;
        case 'multiplicar':
            $resultado = $num1 * $num2;
            echo "<p>A multiplicação de $num1 e $num2 é: $resultado</p>";
            break;
        case 'dividir':
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
                echo "<p>A divisão de $num1 por $num2 é: $resultado</p>";
            } else {
                echo "<p>Erro: Divisão por zero não é permitida.</p>";
            }
            break;
        default:
            echo "<p>Operação inválida.</p>";
    }
?>
<a href="calculadora.html">Voltar</a>
</body>
</html>