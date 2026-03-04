<?php
require_once 'config.php';
//String de conexão - <nome do driver>:<caminho para o banco>
$string_conexao = "sqlite:$db";
//"Conectamos" com o banco. Como é um banco SQLite,
//estamos apenas abrindo um arquivo local e não
//fazendo uma conexão de rede, como no MySql/MariaDB.
try {
    $conn = new PDO($string_conexao);
    echo 'Connected to the SQLite database successfully!';
} catch (PDOException $e) {
    echo $e->getMessage();
}
/**
 * Na primeira vez que executamos este código o banco de dados é criado.
 * Um banco de dados SQLite é um arquivo comum em nosso sistema de arquivos.
 * Nas próximas vezes, como o arquivo do banco já existe, o SQLite irá
 * abrir o arquivo do banco para leitura e não criar um banco novamente.
 */
?>