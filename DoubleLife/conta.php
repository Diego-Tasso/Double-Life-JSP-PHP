<?php
session_start();

//Verifica o acesso.
//require 'acessocomum.php';

//Faz a conexão com o BD.
require 'conexao.php';

//Cria o SQL (consulte tudo da tabela usuarios)
$sql = "SELECT * FROM usuarios WHERE id =" . $_SESSION["id_usuario"];

//Executa o SQL
$result = $conn->query($sql);

	//Se a consulta tiver resultados
	 if ($result->num_rows > 0) {

// Cria uma matriz com o resultado da consulta
 $row = $result->fetch_assoc();
?>
<html>
<head>
    <link rel="stylesheet" href="/estilos/style.css">
    <link rel="shortcut icon" href="/imagens/Logo_Cubo_para_empresa_de_Arquitetura_Design_e_Engenharia_2.png" type="image/x-icon">
    <link rel="stylesheet" href="/estilos/header-footer.css">
 
</head>
<?php
    require 'menu.php';
?>
<body>
    
    <div id = "options">
        <a href = "dadosconta.php"> Informações da conta </a>
        <a href = "consultas.php?pag=1"> Informações de consultas </a>
    </div>
</body>
</html>
<?php
	//Se a consulta não tiver resultados  			
	} else {
		echo "<h1>Nenhum resultado foi encontrado.</h1>";
	}

	//Fecha a conexão.	
	$conn->close();
	


?> 