<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!--HTML 5-->
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="shortcut icon" type="image/x-icon" href="imagens/icone.png" /> 
      <meta name="viewport" content="width=device-width, initial-scale=1.0">


      <!--Conteúdo-->
      <title>DoubleLife</title>
      <meta name="title" content="DoubleLife">
      <meta name="description" content="Somos uma clínica médica nova e com grande potencial. Conheça nossas opções de seguro DoubleLife. Planos de vida, saúde e empresariais.">
      <meta name="author" content="Luan Roger, Ana Eduarda, Isabel Marinho, Diego Tasso, Felipe Martins, Gabriel Tavares">


      <!--Icone-->
      <link rel="shortcut icon" href="/imagens/Logo_Cubo_para_empresa_de_Arquitetura_Design_e_Engenharia_2.png" type="image/x-icon">


      <!--Folhas de Estilo-->
      <link rel="stylesheet" href="css/graf.css">


      <!--Links Externos-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
   </head>
    
    <body>
        <%@include file="acessoadm.jsp"%>
    <div class="topnav">
        <%@include file="menu.jsp"%>
    </div>
        <main id="main-graf">
            <div class="graf-1">
            <a href="grafico_serv.jsp" id="graf-servico">
               <img class="icon-graf1" src="imagens/doughnut-chart-icon.png">
               <h2 class="title-graf"> Gráfico de Serviços</h2>
            </a>    
            </div>
            <div class="graf-2">
            <a href="grafico_usuario.jsp" id="graf-usuarios">
                <img class="icon-graf2" src="imagens/chart_icon2.png">
               <h2 class="title-graf"> Gráfico de Usuários </h2>
            </a>  
            </div>
        </main>
    </body>
    
</html>