<?php
// conexao.php
$servidor = "localhost";
$usuario = "root";      // padrão do XAMPP
$senha = "";            // normalmente em branco
$dbname = "meusite_db"; // nome da tua base de dados

// Criar conexão
$conn = new mysqli($servidor, $usuario, $senha, $dbname);

// Verificar
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
// echo "Conectado com sucesso"; // (usar só para testar)
?>
