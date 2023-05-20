<?php
session_start();

require "../conexao2.php";
require '../enviaremail.php';

// Leitura do Formulário
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$cpf = $_POST["cpf"];
$cep = $_POST["cep"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$data = $_POST["data_nascimento"];
$codigo = rand(1000,9999);
$_SESSION['codigo'] = $codigo;

$hash = password_hash($senha, PASSWORD_BCRYPT);

// Criando o SQL - inserindo na tabela contato os campos em seguida
$sql = "INSERT INTO usuarios (nome, email, senha, cpf, cep, telefone, endereco, data_nascimento) VALUES ('$nome', '$email', '$hash', '$cpf', '$cep', '$telefone', '$endereco', '$data')";

if ($conn->query($sql) === TRUE) {
  //echo "Cadastro feito com sucesso!";
  $sql1 = "SELECT LAST_INSERT_ID() as id_usuario FROM usuarios";
  $result1 = $conn->query($sql1);
  $row1 = $result1->fetch_assoc();
  
  $id_usuario = $row1['id_usuario'];
//Chamada da função no do código
  enviaremail($nome, $email, 'Verifique sua conta', 'Insira o Código para verificar a sua conta: ' . $codigo);
  
  header("Location: ../menu-cliente/recebecodigocadastro.php?id_usuario=$id_usuario");
  //include 'log.php';
} else{
    echo("Erro!");
}
$conn->close();  
?>