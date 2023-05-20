<?php
    session_start();
    
    require "../conexao2.php";
    require "../enviaremail.php";
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
       
        
        $email = $_POST['email'];
        
        $sql = "SELECT * FROM usuarios where email='" . $email . "'";
        
        $result = $conn->query($sql);
        
        $row = $result->fetch_assoc();
        
        if($result->num_rows > 0){
            $_SESSION["id_usuario"] = $row["id"];
            $id_usuario = $_SESSION["id_usuario"];
            $codigo = rand(1000,9999);
            $_SESSION['codigo'] = $codigo;
        
            enviaremail($id_usuario, $email, 'Este é o código: ' . $codigo, 'Teste');
            
            echo "<div class='Voltar'>
                    <a href='/menu-cliente/cadastro-login.php' >
                    <img src='/imagens/voltar.png' id='btn_voltar' class='return'>
                    </a>
                </div>
                <form method='post' action='verificacodigo.php?email=". $email."'>
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
               <div class='baixo'></div>
               <a href='/menu-med/indexmed.php'>
                   <button>-></button>
               </a>
               ";
        } else{
            echo"ERRO: " . $conn->error;
            //header("Location: esqueceusenha.php");
        }
    ?>
    
</body>
</html>