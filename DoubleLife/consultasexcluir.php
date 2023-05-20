 <?php
session_start(); 

require 'conexao2.php';

//Faz a leitura do dado passado pelo link.
$campoid = $_GET['id'];
 
// Apagar da tabela usuários o registro com o id
$sql = "DELETE FROM consultas WHERE id=$campoid";

$result = $conn->query($sql);

//Executa o sql e faz tratamento de erro.
if ($result === TRUE) {
   header('Location: index.php'); //Redireciona para o controle  
    
} else {
  echo "Erro: " . $conn->error;
}

//Fecha a conexão.
$conn->close();

?> 