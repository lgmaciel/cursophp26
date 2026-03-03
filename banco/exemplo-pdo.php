<?php
// Configurações do banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "cursophp26a";

try {
    // Criar conexão PDO
    $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    // Definir o modo de erro do PDO para exceção
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consultar dados
    $sql = "SELECT id, nome, email FROM usuario;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Processar resultados
    if ($stmt->rowCount() > 0) {
        // Escrever dados linha por linha
        echo "<ul>".PHP_EOL;
        while($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<li>id: " . $linha["id"]. " - Nome: " . $linha["nome"]. " - Email: " . $linha["email"]."</li>". PHP_EOL;
        }
        echo "</ul>".PHP_EOL;
    } else {
        echo "0 resultados";
    }
} catch(PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

// Fechar conexão
$conn = null;
?>
