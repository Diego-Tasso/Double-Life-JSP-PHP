<html lang="pt-br">
<head>
    <link rel="shortcut icon" href="/imagens/Logo_Cubo_para_empresa_de_Arquitetura_Design_e_Engenharia_2.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="shortcut icon" type="image/x-icon" href="imagens/icone.png" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>

    <div class="container" >
            <div class="second-column" style = "background-color: white; padding: 50px 10px 50px 10px ">
                <h2 class="title title-second">Contato</h2>
                <p class="description description-second">Contate nossa equipe </p>
                <form class="form" method="post" action="enviarcontato.jsp">
                    <label class="label-input">
                        <i class="far fa-solid fa-clipboard icon-modify"></i>
                        <input type="text" name="nome" placeholder="Nome Completo" required>
                    </label>
                
                    <label class="label-input">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="email" placeholder="Email" required>
                    </label>
                    
                    <label class="label-input">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="text" name="assunto" placeholder="Assunto" required>
                    </label>
                    
                    <label class="label-input">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="text" name="senha" placeholder="Assunto" required>
                    </label>

                    <label class="label-input">
                        <i class="far fa-solid fa-chalkboard-user icon-modify"></i>
                        <input type="text" name="mensagem" placeholder="Mensagem" required>
                    </label>
                  
                    
                    <button value="Enviar" id="btn-logar" class="btn btn-second">Enviar</button>

                </form>
            </div><!-- second column -->
        </div><!-- first content -->
    </body>
</html>