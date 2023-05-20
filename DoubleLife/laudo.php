<?php
session_start();

//Verifica o acesso.

//Faz a leitura do dado passado pelo link.
$id_consulta = filter_input(INPUT_GET, 'id_consulta');
$id_medico = filter_input(INPUT_GET, 'id_medico');
$id_usuario = filter_input(INPUT_GET, 'id_usuario');

//Faz a conexão com o BD.
require 'conexao2.php';

//Cria o SQL (consulte tudo da tabela usuarios)
$sql = "SELECT * FROM laudos WHERE id_consulta = $id_consulta";
$sql1 = "SELECT nome FROM usuarios WHERE id = $id_usuario";
$sql2 = "SELECT nome FROM usuarios WHERE id = $id_medico";

//Executa o SQL
$result = $conn->query($sql);
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);

//Se a consulta tiver resultados
if ($result->num_rows > 0) {

// Cria uma matriz com o resultado da consulta
 $row = $result->fetch_assoc();
 $row1 = $result1->fetch_assoc();
 $row2 = $result2->fetch_assoc();
?>
<html> 
		<meta charset = "UTF-8">
	<head>
		<style>
			.geral {
				border: 2px solid black;
				margin-left: 120px;
				margin-right: 120px;
			}
			h1 {
				text-align:center;
				padding: 10px;
				font-size: 35px;
			}
			#description {
				padding-left: 150px;
				padding-right: 150px;
				left: 10%;
				font-size: 25px;
			}
			#data {
				padding-right: 150px;
				padding-left: 150px;
				text-align: right;
				font-size: 15px;
			}
			#ids {
				padding-right: 150px;
				padding-left: 150px;
				font-size: 15px;
				text-align: right;
			}
		
		</style>
		<!-- PDF I - Bibliotecas para gerar PDF -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.4/jspdf.plugin.autotable.min.js"></script>
			
			<!-- PDF II - Arquivo com o código para gerar PDF -->
			<script src="/js/pdf.js"></script>
	</head>
	<body>
		<div class = "geral">
		<div class = "content"> 
			<h1> <?php echo $row["titulo"]; ?> </h1>
			
			<p id = "description">
				<?php echo $row["texto"]; ?>
			</p> 
			<p id = "data"> Data do atendimento: <?php echo $row["data"]; ?> </p> 
			<p id = "ids"> Nome do Cliente: <?php echo $row1['nome']; ?> </p> 
			<p id = "ids"> Nome do Doutor: <?php echo $row2['nome']; ?> </p> 
		</div>
		</div>
		<form><input type="button" value="Gerar PDF" onclick="getPDF()"></form>
	</body>
</html>
<?php
	//Se a consulta não tiver resultados  			
	} 
	else {
		echo "<h1>Nenhum resultado foi encontrado.</h1>";
	}

	//Fecha a conexão.	
	$conn->close();
	


?> 
