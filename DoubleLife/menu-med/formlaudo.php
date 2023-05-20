<?php
session_start();

//Verifica o acesso.

//Faz a leitura do dado passado pelo link.
$id_consulta_url = filter_input(INPUT_GET, 'id');

//Faz a conexão com o BD.
require 'conexaomed.php';

//Cria o SQL (consulte tudo da tabela usuarios)
$sql = "SELECT * FROM consultas WHERE id = $id_consulta_url";

//Executa o SQL
$result = $conn->query($sql);

//Se a consulta tiver resultados
if ($result->num_rows > 0) {

// Cria uma matriz com o resultado da consulta
 $row = $result->fetch_assoc();
 
 $id_consulta = $row['id'];
 $id_medico = $row['id_medico'];
 $id_usuario = $row['id_usuario'];
 
?>

<html lang="pt-br">
<head>
    <link rel="shortcut icon" href="/imagens/Logo_Cubo_para_empresa_de_Arquitetura_Design_e_Engenharia_2.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laudo</title>
    <link rel="stylesheet" href="/estilos/form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>

    <div class="container" >
            <div class="second-column" style = "background-color: white; padding: 50px 10px 50px 10px ">
                <h2 class="title title-second">Emissão de Laudo</h2>
                <p class="description description-second">Faça o laudo para o paciente o qual você atendeu.</p>
                <form class="form" method="post" action="emitirlaudo.php">
                    <label class="label-input" for="">
                        <i class="far fa-solid fa-clipboard icon-modify"></i>
                        <input type="text" name="titulo" placeholder="Titulo do laudo " required class="form-input">
                    </label>

                    <label class="label-input" for="">
                    
                        <textarea style= "height: 200px" name="texto" placeholder="Texto" class="form-input" id="form-msg"></textarea>
                    </label>
                    
                    <input type="hidden" name="id_consulta" value="<?php echo $id_consulta; ?>" required class="form-input">
                    <input type="hidden" name="id_medico" value="<?php echo $id_medico; ?>" required class="form-input">
                    <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>" required class="form-input">
                    
                    <button type="submit" value="Enviar" id="btn-logar" class="btn btn-second">Enviar</button>

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
