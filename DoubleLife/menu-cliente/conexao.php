<?php
// Parâmetros para criar a conexão
$servername = "sql110.epizy.com";
$username = "epiz_32653955";
$password = "C62XZOj4p9yLSPW";
$dbname = "epiz_32653955_planos";

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checando a conexão
if ($conn->connect_error) {
  die("Você se deu mal: " . $conn->connect_error);
}
?>