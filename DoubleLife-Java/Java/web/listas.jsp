<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Double Life</title>
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
        <a href = "listacontato.jsp"> <h3 id = "content-right-single"> Lista de Contatos </h3> </a>
        <a href = "listausuario.jsp"> <h3 id = "content-right-single"> Lista de Usuários </h3> </a>
        <a href = "listamedico.jsp?pag=1"> <h3 id = "content-right-single"> Lista de Médicos </h3> </a>
        
    </div>
  <div id = "content-left">
    <h3 style = "font-size: 25px;">Olá, Seja bem vindo a Área do Administrador. </h3>
        <p style = "font-size: 20px;">
            Aqui você pode se redirecionar de maneira offline para as listas do nosso site.
        </p>
        <p style = "font-size: 20px;">
            <b> Lista de Usuários: </b> Aba para a lista de usuários, no qual você pode pesquisar por um usuário específico para saber se ele existe em nosso site. 
            
        </p>
        <p style = "font-size: 20px;">
            <b> Lista de Médicos </b> Aba para a lista de médicos, no qual você pode pesquisar por um médico específico para saber se ele existe em nosso site. 
            
        </p>
        <p style = "font-size: 20px;">
            <b> Lista de Mensagens de Agenda: </b>Aba para a lista de mensagens, no qual você pode pesquisar por mensagens específicas em nosso site.
        </p>
  </p>
  </div>
</div>

<div class="footer">
    <%@include file="rodape.jsp"%>
</div>

</body>
</html>