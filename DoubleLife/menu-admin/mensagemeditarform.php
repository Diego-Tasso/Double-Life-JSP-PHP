<?php
session_start();

//Verifica o acesso.

//Faz a leitura do dado passado pelo link.
$campoid = filter_input(INPUT_GET, 'id');

//Faz a conexão com o BD.
require 'conexaoadmin.php';

//Cria o SQL (consulte tudo da tabela usuarios)
$sql = "SELECT * FROM contato WHERE id = $campoid";

//Executa o SQL
$result = $conn->query($sql);

//Se a consulta tiver resultados
if ($result->num_rows > 0) {

// Cria uma matriz com o resultado da consulta
 $row = $result->fetch_assoc();
?>
<html lang="pt-br">
<head>
    <link rel="shortcut icon" href="/imagens/Logo_Cubo_para_empresa_de_Arquitetura_Design_e_Engenharia_2.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Mensagem</title>
    <link rel="stylesheet" href="/estilos/form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <div class="container" >
            <div class="second-column" style = "background-color: white; padding: 50px 10px 50px 10px ">
                <h2 class="title title-second">Editar</h2>

                <form class="form" method="post" action="editarmsg.php">
                    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                    <label class="label-input" for="">
                        <i class="far fa-solid fa-clipboard icon-modify"></i>
                        <input type="text" name="nome" value="<?php echo $row["nome"]; ?>" placeholder="Nome Completo">
                    </label>
                
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="email" value="<?php echo $row["email"]; ?>" placeholder="Email">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="text" name="assunto" value="<?php echo $row["assunto"]; ?>" placeholder="Assunto" value="<?php echo $row["assunto"]; ?>">
                    </label>

                    <label class="label-input" for="">
                        <i class="far fa-solid fa-chalkboard-user icon-modify"></i>
                        <input type="text-area" name="mensagem" value="<?php echo $row["mensagem"]; ?>">
                    </label>
                    <button type="submit" class="btn btn-second" id="btn-cadastrar">Editar</button>
                </form>
            </div><!-- second column -->
        </div><!-- first content -->
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