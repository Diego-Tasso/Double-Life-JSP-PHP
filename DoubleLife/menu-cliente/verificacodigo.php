<?php
    session_start();
    
    $codigoescrito = $_POST['codigo'];
    $email = $_GET['email'];
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <link rel="stylesheet" href="/estilos/login.css">
        <link rel="stylesheet" href="/estilos/style.css">
        <meta charset="UTF-8">
        <title>Esqueceu Senha</title>
    </head>
    <body>
        <?php
            if($codigoescrito == $_SESSION['codigo']){
                echo "<div class='Voltar'>
                    <a href='/menu-cliente/cadastro-login.php' >
                    <img src='/imagens/voltar.png' id='btn_voltar' class='return'>
                    </a>
                </div>
                <form method='post' action='inseresenha.php?email=". $email."'>
                    <div class='fundo'>
                        <div class='container_senha'>
                            <div id='title_senha'>
                                <h2 class='title-second'>Insira a Senha</h2>
                            </div>
                            <div class='Email'>
                                <input type='password' name='senha' placeholder='Insira a senha' class='input_email'>
                            </div>
                            <div class='btn_senha'>
                                <button type='submit' value='Enviar' id='btn-logar' class='btn btn-second'>Enviar</button>
                            </div>
                        </div>
                    </div>
                </form>
               <div class='baixo'></div>
               <a href='/menu-med/indexmed.php'>
                   <button>-></button>
               </a>
       ";
        } else{
            header("Location: esqueceusenha.php");
        }
        ?>
</html>