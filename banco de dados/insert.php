<?php

// Dados da conexão com o MySQL
$servername = "localhost";
$username = "root";
$password = ""; // Senha do usuário do MySQL (vazia por padrão no XAMPP)
$dbname = "we_roots"; // Nome do banco de dados

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Fechar a conexão (opcional, normalmente é feito após usar a conexão)
// $conn->close();

?>  