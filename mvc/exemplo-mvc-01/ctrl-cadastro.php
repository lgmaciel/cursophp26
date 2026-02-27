<?php
//iniciar/recuperar sessão
session_start();
$nome = isset($_SESSION['nome']) ? $_SESSION['nome'] : '';
$classe = isset($_SESSION['classe'])? $_SESSION['classe'] : '';

// Recebe os dados da VIEW view-ficha.html (está no cliente)
$nome = $_POST['nome'];
$classe= $_POST['classe'];

// Fazemos algum processamento com os dados....


// Alteramos a MODEL - Guardamos os dados na SESSÃO do usuário (está no servidor)

$_SESSION['nome'] = $nome;
$_SESSION['classe'] = $classe;


// Pedimos para a VIEW mostrar os dados.
header('Location: view-ficha.php');
?>
