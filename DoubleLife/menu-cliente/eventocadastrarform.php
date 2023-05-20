<?php
    session_start();
    
    include "../acessocomum.php";
?>
<html>
<head>
<title>Agendamento Cadastrar</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="/estilos/form.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
<?php
//Lê a data e hora clicadas pelo usuário.
$date = new \DateTime($_GET['date'],new \DateTimeZone('America/Sao_Paulo'));
$medico = $_GET['id_medico'];

?>
<div class="container" >
            <div class="second-column" style = "background-color: white; padding: 50px 10px 50px 10px ">
                <h2 class="title title-second">Agendamento</h2>
                <p class="description description-second">Confirmar o agendamento na nossa clínica</p>
                <form class="form" method="post" action="eventocadastrarcodigo.php">
                    <label class="label-input" for="">
                        <i class="far fa-solid fa-clipboard icon-modify"></i>
                        <input type="date" name="data" id = "date" value="<?php echo $date->format("Y-m-d"); ?>" readonly >
                    </label>
	
	<label class="label-input" for="">
                        <i class="far fa-solid fa-clipboard icon-modify"></i>
                        <input type="time" name="time" id = "time" value="<?php echo $date->format("H:i"); ?>" readonly>
                    </label>

	<label class="label-input" for="">
                        <i class="far fa-solid fa-clipboard icon-modify"></i>
                        <input type="text" name="usuario" id = "usuario" value="<?php echo $_SESSION['id_usuario']; ?>" readonly>
                    </label>
                
	<label class="label-input" for="">
                        <i class="far fa-solid fa-clipboard icon-modify"></i>
                        <input type="text" name="medico" id = "medico" value="<?php echo $medico; ?>" readonly>
                    </label>
         
                    
                    <button type="submit" value="Enviar" id="btn-logar" class="btn btn-second">Enviar</button>

                </form>
            </div><!-- second column -->
        </div><!-- first content -->
    </body>
</html>
