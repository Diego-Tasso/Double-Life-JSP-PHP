<html>
<head>
	<meta charset="utf-8">
	<title>Redijir emails</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="shortcut icon" type="image/x-icon" href="imagens/icone.png" /> 
</head>
<body>
	 <div class="container">
            <div class="second-column" style = "background-color: white; padding: 50px 10px 50px 10px ">
                <h2 class="title title-second">Emails</h2>
                <p class="description description-second">Redija emails promocionais para os usuários.</p>
                <form class="form" method="post" action="enviodeemail.jsp">                       
                    
                    <label class="label-input">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="text" name="assunto" placeholder="Assunto" required>
                    </label>

                    <label class="label-input">
                        <i class="far fa-solid fa-chalkboard-user icon-modify"></i>
                        <input type="text" name="comenta" placeholder="Mensagem" required>
                    </label>
                 
                    <button type="submit" value="Enviar emails" id="btn-logar" class="btn btn-second">Enviar</button>
                </form>
            </div>
        </div>

</body>
</html>

