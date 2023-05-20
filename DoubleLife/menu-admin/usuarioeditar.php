<?php
session_start();

//Dados do formulário
$campoid = filter_input(INPUT_POST, 'id');
$camponome = filter_input(INPUT_POST, 'nome');
$campoemail = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$camposenha = filter_input(INPUT_POST, 'senha');
$campocpf = filter_input(INPUT_POST, 'cpf');
$campocep = filter_input(INPUT_POST, 'cep');
$campoendereco = filter_input(INPUT_POST, 'endereco');
$campotelefone = filter_input(INPUT_POST, 'telefone');
$campotipo = filter_input(INPUT_POST, 'tipo');

//Faz a conexão com o BD.
require 'conexaoadmin.php';

//Sql que altera um registro da tabela usuários
$sql = "UPDATE usuarios SET nome='" . $camponome . "', email='" . $campoemail . "', senha='" . $camposenha . "', cpf='" . $campocpf . "', cep='" . $campocep . "', endereco='" . $campoendereco . "', telefone='" . $campotelefone . "',  tipo='" . $campotipo . "' WHERE id=" . $campoid;

//Executa o sql e faz tratamento de erro.
if ($conn->query($sql) === TRUE) {
  echo "Registro atualizado.";
  
  include 'log.php';
  
} else {
  echo "Erro: " . $conn->error;
}
    header('Location: controlarusuarios.php?pag=1'); //Redireciona para o form	

//Fecha a conexão.
	$conn->close();
	

?> 