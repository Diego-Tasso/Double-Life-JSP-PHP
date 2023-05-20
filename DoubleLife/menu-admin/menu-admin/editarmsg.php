<?php
session_start();

//Dados do formulário
$campoid = filter_input(INPUT_POST, 'id');
$camponome = filter_input(INPUT_POST, 'nome');
$campoemail = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$campoassunto = filter_input(INPUT_POST, 'assunto');
$campomensagem = filter_input(INPUT_POST, 'mensagem');

//Faz a conexão com o BD.
require 'conexaoadmin.php';

//Sql que altera um registro da tabela usuários
$sql = "UPDATE contato SET nome='" . $camponome . "', email='" . $campoemail . "', assunto='" . $campoassunto . "', mensagem ='" . $campomensagem . "' WHERE id=" . $campoid;

//Executa o sql e faz tratamento de erro.
if ($conn->query($sql) === TRUE) {
  echo "Registro atualizado.";
  
  include 'log.php';
  
} else {
  echo "Erro: " . $conn->error;
}
    header('Location: controlarmsg.php?pag=1'); //Redireciona para o form	

//Fecha a conexão.
	$conn->close();
	

?> 