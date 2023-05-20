<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Emails</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="imagens/icone.png" />

</head>
<body>
    <%@include file="acessoadm.jsp"%>
<div class="topnav">
    
    <%@include file="menu.jsp"%>
</div>

<div class="content">
 
  <p>
    <div id ="content-right">
        <a href = "enviodeemailform.jsp"> <h3 id = "content-right-single"> Envio de Promoções </h3> </a>
     
    </div>
  <div id = "content-left" style = "font-size: 30px">
    <h3>Olá, Seja bem vindo a área de envio de email. </h3>
        <p>
            Aqui você pode enviar emails para os usuários presentes no banco de dados do site, por meio de um formulário, de maneira simples e offline.
        </p>
        <p>
            <b> Envio de Promoções: </b> Aba para o envio de promoções para todos os usuários presentes no banco de dados do site.
            
        </p>
       
  </p>
  </div>
</div>

<div class="footer">
    <%@include file="rodape.jsp"%>
</div>

</body>
</html>