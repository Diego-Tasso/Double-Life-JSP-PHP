<html lang="pt-br">
<head>
    <style>
        h5 {
            margin-bottom: 10px;
        }
        .avatar  {
            text-align: center;
        }

    </style>
    <link rel="shortcut icon" href="/imagens/Logo_Cubo_para_empresa_de_Arquitetura_Design_e_Engenharia_2.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de médico</title>
    <link rel="stylesheet" href="/estilos/form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>

    <div class="container" >
            <div class="second-column" style = "background-color: white; padding: 50px 10px 50px 10px ">
                <h2 class="title title-second">Cadastro de médico</h2>
                <p class="description description-second">Insira um médico em nosso banco de dados</p>
                <form class = "form" method="post" action="inseremedico.php" enctype="multipart/form-data">
            
            <label class="label-input" for="">
                <i class="far fa-solid fa-clipboard icon-modify"></i>
                <input type="text" name="nome" placeholder="Nome Completo">
            </label>
                
            <label class="label-input" for="">
                <i class="far fa-envelope icon-modify"></i>
                <input type="email" name="email" placeholder="Email">
            </label>
                    
            <label class="label-input" for="">
                <i class="fas fa-lock icon-modify"></i>
                <input type="password" name="senha" placeholder="Senha">
            </label>
            
            <label class="label-input" for="">
                <i class="far fa-solid fa-clipboard icon-modify"></i>
                <input type="text" name="especialidade" placeholder="Especialidade">
            </label>
                
            <label class="label-input" for="">
                <i class="far fa-envelope icon-modify"></i>
                <input type="date" name="data_entrada" placeholder="Data de Entrada">
            </label>
            
            <label class="label-input" for="">
                <i class="far fa-solid fa-clipboard icon-modify"></i>
                <input type="text" name="faculdade" placeholder="Faculdade">
            </label> <br>
                <div class ="avatar">
                <H5> Selecione a imagem do médico </h5>
                <input style = "height: 25px; width: 125px; font-style: Georgia;" type="file" name = "pfp" class="filestyle" data-classButton="btn btn-primary" data-input="false" data-classIcon="icon-plus" data-buttonText="Your label here.">
                </div>
              

            <br>
            <button type="submit" value="Enviar" id="btn-logar" class="btn btn-second">Enviar</button>
            </form>
        </div><!-- second column -->
    </div><!-- first content -->
    </body>
</html>


