<?php
$nome = isset($_POST['nome'])? $_POST['nome']:'';

//Pede para a view mostrar o resultado
if($nome!='') {    
    header("Location: view-de-saida.php?nome=". strtoupper($nome));
} else {    
  header("Location: view-de-entrada.html");
  echo "<h1>Oi, oi, oi!!!!</h1>";
}
?>
