<?php
require_once 'config.php';

//Instruções SQL que executaremos
$criar_tabela_cidade = '
CREATE TABLE IF NOT EXISTS cidade (
	id INTEGER PRIMARY KEY ,
	nome TEXT NOT NULL
	);
';

$criar_tabela_usuario = '
CREATE TABLE IF NOT EXISTS usuario (
    id INTEGER PRIMARY KEY,
    nome TEXT,
    email TEXT,
    id_cidade INTEGER,
    FOREIGN KEY (id_cidade)
        REFERENCES cidade(id) 
            ON UPDATE CASCADE
            ON DELETE CASCADE);';


//Conectamos no banco e...
try {
    $string_de_conexao = "sqlite:$db";
    $pdo = new PDO($string_de_conexao);
    //..executamos as instruções SQL
    $pdo->exec($criar_tabela_cidade);
    $pdo->exec($criar_tabela_usuario);
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>