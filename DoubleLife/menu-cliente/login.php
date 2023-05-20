<?php
session_start();

if (isset($_POST['senha'])){
require 'conexao.php';
// Dados do Formulário
$campoemail = $_POST["email"];
$camposenha = $_POST["senha"];
    
//$senha = password_hash($camposenha, PASSWORD_BCRYPT);

//Cria o SQL (consulte tudo na tabela usuarios com o email digitado no form)
$sql = "SELECT * FROM usuarios where email='$campoemail' and status='ativo'";

//include '/log.php';

$result = $conn->query($sql);

// Cria uma matriz com o resultado da consulta
 $row = $result->fetch_assoc();
 
 
	//Se a consulta tiver resultados
	if ($result->num_rows > 0) {
		
			if(password_verify($camposenha, $row["senha"]) === TRUE){
				$_SESSION['nome'] = $row["nome"];
				$_SESSION['email'] = $row["email"];
				$_SESSION['senha'] = $row["senha"];
				$_SESSION['tipo'] = $row["tipo"];
				$_SESSION['id_usuario'] = $row["id"];

                if(isset($_SESSION["email"]) && isset($_SESSION["senha"])){
                    if(isset($_SESSION["tipo"])){
                        if($_SESSION["tipo"]=="a"){
                            header("Location: /menu-admin/indexadmin.php");
                        } else if($_SESSION["tipo"]=="c"){
                            include "../consultasconcluir.php";
                            header("Location: /index.php");
                        } else{
                            header("Location: /menu-med/indexmed.php");
                        }
                   }
                }
				exit;
			}else{
				echo ' <div style = "font-style: Georgia" "> Senha Inválida </h1>'; 
				header( "refresh:3;url=/menu-cliente/cadastro-login.php" );
				exit;  
			}
	//Se a consulta não tiver resultados  			
	} else {
		header("Location:/menu-cliente/cadastro-login.php"); //Redireciona para o form
        
		exit; // Interrompe o Script
	}
//Se o usuário não usou o formulário
} else {
    header("Location:/menu-cliente/cadastro-login.php"); //Redireciona para o form
    exit; // Interrompe o Script
}

//Fecha a conexão.
$conn->close();
?>