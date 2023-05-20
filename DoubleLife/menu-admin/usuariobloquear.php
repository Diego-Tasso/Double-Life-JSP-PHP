 <?php
session_start(); 

require 'conexaoadmin.php';
 
//Faz a leitura do dado passado pelo link.
$campoid = filter_input(INPUT_GET, 'id');
$campostatus = filter_input(INPUT_GET, 'status');

if($campostatus=="ativo"){

// Bloquear usuário o registro com o id
$sql = "UPDATE usuarios SET Status='bloqueado' WHERE id=$campoid";

}else{
    
$sql = "UPDATE usuarios SET Status='ativo' WHERE id=$campoid";
}

//Executa o sql e faz tratamento de erro.
if ($conn->query($sql) === TRUE) { 
   header('Location: ../menu-admin/controlarusuarios.php?pag=1'); //Redireciona para o controle  
} else {
  echo "Erro: " . $conn->error;
}

//Fecha a conexão.
$conn->close();

?> 