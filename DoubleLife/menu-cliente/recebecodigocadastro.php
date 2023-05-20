<?php
    session_start();
    
    require "../conexao2.php";
    
        $codigo = $_POST['codigo'];
        $codigo_session = $_SESSION['codigo'];
        if($codigo_session == $codigo){
            $sql = "UPDATE usuarios SET status = 'ativo'";
            $result = $conn->query($sql);
            if($result === TRUE){
                header("Location: ../index.php");
            } else{
                echo "Deu Erro!";
            }
        } else{
            echo "Código errado!";
        }
?>
<html>
    <head>
        <link rel="stylesheet" href="/estilos/login.css">
        <link rel="stylesheet" href="/estilos/style.css">
        <meta charset="UTF-8">
        <title>Esqueceu Senha</title>
    </head>
    <body>
        <div class='Voltar'>
                    <a href='/menu-cliente/cadastro-login.php' >
                    <img src='/imagens/voltar.png' id='btn_voltar' class='return'>
                    </a>
                </div>
                <form method='post' action='recebecodigocadastro.php'>
                    <div class='fundo'>
                       <div class='container_senha'>
                            <div id='title_senha'>
                                <h2 class='title-second'>Insira o código</h2>
                            </div>
                            <div class='Email'>
                                <input type='text' name='codigo' placeholder='Insira o código' class='input_email'>
                            </div>
                            <div class='btn_senha'>
                                <button type='submit' value='Enviar' id='btn-logar' class='btn btn-second'>Enviar</button>
                            </div>
                        </div>
                   </div>
               </form>
    </body>
    
</html>