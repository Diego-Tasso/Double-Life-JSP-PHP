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
        <a href = "usuarioscontrolar.jsp?pag=1"> <h3 id = "content-right-single"> Controle de Usuários </h3> </a>
        <a href = "consultascontrolar.jsp?pag=1"> <h3 id = "content-right-single"> Controle de Consultas </h3> </a>
        <a href = "medicoscontrolar.jsp?pag=1"> <h3 id = "content-right-single"> Controle de Médicos </h3> </a>
    </div>
  <div id = "content-left">
    <h3>Olá, Seja bem vindo a Área do Administrador. </h3>
        <p>
            Aqui você pode se redirecionar de maneira offline para todas as páginas de controle do nosso site.
        </p>
        <p>
            <b> Controle de Usuários: </b> Aba para o tabela de controle de usuários, o qual você pode editar um usuário e modificar suas informações, principalmente o seu tipo que é apenas modificado dessa forma. 
            
        </p>
        <p>
            <b> Controle de Consultas: </b> Aba para controle de consultas que são ou já foram marcadas dentro de nossa clínica.
        </p>
        <p>
            <b> Controle de Médicos </b> Aba para controle de todos os usuários do tipo "M" que seria os médicos da empresa.
        </p>
  </div>
</div>

<div class="footer">
    <%@include file="rodape.jsp"%>
</div>

</body>
</html>