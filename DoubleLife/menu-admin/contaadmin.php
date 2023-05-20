<?php
session_start();

//Faz a conexão com o BD.
require 'conexaoadmin.php';

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
    <link rel="stylesheet" href="/estilos/styleadmin.css">
    <style type="text/css">
        
        #container-form{
            position: absolute;
            width: 350px;
            min-height: 380px;
            max-height: 65%;
            text-align: center;
            padding: 20px 5px;
            color: #024873;
            font-size: 20px;
            margin-top: 80px;
            margin-left: 40%;
            border: 2px solid #024873;
            border-radius: 10px;
            box-shadow: 0 6px 10px 0 rgb(0 0 0 / 70%);
        }
        .form-conta{
            width: 250px;
            height: 30px;
            border-radius: 10px;
            border-color: #024873;
            background-color: #ecf0f1;
        }
        .form-conta-label{
            background-color: white;
            font-weight: bold;
            color:#2b4965;
            font-family: 'Open Sans', sans-serif;;
        }
        .form-conta-buttom{
            font-weight: bold;
            width: 250px;
            height: 30px;
            border-radius: 10px;
            border-color: #024873;
            background-color: #2b4965;
            color: white;
        }
        .form-conta-buttom:hover{
            font-weight: bold;
            color: black;
            background-color: rgb(240,240,240);
            transition: 0.4s;
        }
    </style>
</head>
<div class = "header">
        <!--Header-->
   <?php
        include "menu-admin.php";
   ?>
        </div>
<body>
    <div id="container-form">
        <i class="fa-solid fa-person"></i>
        <form method="post" action="../mudardados.php">
            <label class="form-conta-label">Nome:</label><br><br>
            <input class="form-conta" type="text" value="<?php echo $row["nome"]; ?>" name="nome"><br><br>
            <label class="form-conta-label">Email:</label><br><br>
            <input class="form-conta" type="email" value="<?php echo $row["email"]; ?>" name="email"><br><br>
            <label class="form-conta-label">CPF:</label><br><br>
            <input class="form-conta" type="text" value="<?php echo $row["cpf"]; ?>" name="cpf" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Digite um CPF no formato: xxx.xxx.xxx-xx"><br><br>
            <input type="submit" class="form-conta-buttom" value="Salvar" name="btn_enviar">
        </form>
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