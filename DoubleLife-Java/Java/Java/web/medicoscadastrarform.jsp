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
                <h2 class="title title-second">Cadastro</h2>
                <p class="description description-second">Cadastre o Médico </p>
                <form class="form" method="post" action="medicoscadastrar.jsp">
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
                        <input type="password" name="senha" placeholder="Senha" required>>
                    </label>

                    <label class="label-input">
                        <i class="far fa-solid fa-chalkboard-user icon-modify"></i>
                        <input type="tel" name="cpf" placeholder="CPF" required>
                    </label>
                    
                    <label class="label-input">
                        <i class="far fa-solid fa-house icon-modify"></i>
                        <input type="text" name="cep" placeholder="CEP" required>
                    </label>

                    <label class="label-input">
                        <i class="far fa-solid fa-phone icon-modify"></i>
                        <input type="text" name="telefone" placeholder="Número de Telefone" required>
                    </label>
                    <label class="label-input">
                        <i class="far fa-solid fa-phone icon-modify"></i>
                        <input type="text" name="endereco" placeholder="Endereco" required>
                    </label> 
                    
                    <label class="label-input">
                         <i class="far fa-solid fa-square-user icon-modify"></i>
                        <input type="text" name="id_especialidade" placeholder="Escolha a especialidade do médico" required>  
                    </label>
                    
                    <label class="label-input">
                         <i class="far fa-solid fa-square-user icon-modify"></i>
                        <input type="text" name="tempo" placeholder="Escolha o tempo em que o médico se encontra na clínica" required>  
                    </label>
                    
                    <label class="label-input">
                         <i class="far fa-solid fa-square-user icon-modify"></i>
                        <input type="text" name="competencia" placeholder="Escolha a competÊncia do médico" required>  
                    </label>
                    
                    <label class="label-input">
                         <i class="far fa-solid fa-square-user icon-modify"></i>
                        <input type="text" name="faculdade" placeholder="Escolha a faculdade que o médico fez" required>  
                    </label>
                    <br>
                    
                    <button type="submit" value="Enviar" id="btn-logar" class="btn btn-second">Enviar</button>

                </form>
            </div><!-- second column -->
        </div><!-- first content -->
    </body>
</html>