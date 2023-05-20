<html>
<head>
<title>Login</title>
<meta charset="UTF-8">
<link href="css/cadastro.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="imagens/icone.png" /> 
</head>
<body>
    <div class="container" >
        <div class="second-column" style = "background-color: white; padding: 50px 10px 50px 10px ">
	<form class = "form" action="login.jsp" method="post">
            <div class ="center" style ="text-align: center">
		<h2 class="title title-second">Login</h2>
                <p class="description description-second"> Faça login para que possa acessar as funções administrativas</p>
            </div>
                <label class="label-input">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="text" name="email" placeholder="Email">
                </label>
                <label class="label-input">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha" placeholder="Senha">
                </label>
                        <button type="submit" value="Entrar" id="btn-logar" class="btn btn-second" style = "margin:10px">Entrar</button>  
	</form>
        </div>
    </div>
</body>
</html>
