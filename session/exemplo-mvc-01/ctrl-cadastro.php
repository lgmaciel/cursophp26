<?php
// Recebe os dados da VIEW view-ficha.html (está no cliente)
$nome = $_POST['nome'];
$classe= $_POST['classe'];

// Fazemos algum processamento com os dados....

// Guardamos os dados na SESSÃO do usuário (está no servidor)
session_start();
$_SESSION['nome'] = $nome;
$_SESSION['classe'] = $classe;

// Pedimos para a VIEW mostrar os dados.
header('Location: view-ficha.php');
?>
