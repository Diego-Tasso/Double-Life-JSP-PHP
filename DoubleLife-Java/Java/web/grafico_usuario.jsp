<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ page import="dao.Dao, classes.Usuario, java.util.*"%>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gráfico de Usuários</title>
    <link rel="shortcut icon" type="image/x-icon" href="imagens/icone.png" /> 
     <link rel="stylesheet" href="css/grafico.css">
</head>
            <%               
                int numMedico = Dao.getRelatorioMedico();
                int numComum = Dao.getRelatorioComum();
                int numAdmin = Dao.getRelatorioAdmin();
                request.setAttribute("numMedico", numMedico);  
                request.setAttribute("numComum", numComum); 
                request.setAttribute("numAdmin", numAdmin); 
            %>
<body>
    <div>
        <%@include file="acessoadm.jsp"%>
        <a class="return-admin" href="graficos.jsp">
            Voltar
        </a>
    </div>
        <h1 id="Titulo2"> Gráfico de Usuários </h1>
    <div class="wrapper2">
        <canvas id="myChart2"></canvas>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.0/Chart.min.js
"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script> 
<script>
    var ctx2 = document.getElementById('myChart2');
    var quantidades = [<%=numAdmin%> , <%=numComum%> , <%=numMedico%>];
    var acessos = ['Administradores','Usuários' , 'Medico'];

    var pieChart= new Chart(ctx2, {
    type: "bar",
    data: {labels: acessos , 
    datasets: [
{
label:"Acessos",
data: quantidades,
backgroundColor:[
    "rgba(255, 99, 132, 1)",
    "rgba(54, 162, 235, 1)",
    "rgba(255, 206, 86, 1)",
    "rgba(75, 192, 192, 1)",
    "rgba(153, 102, 255, 1)",
    ],
    borderWidth: 5 // afeta a cor e a largura da borda 


}

    ]
    }

 }
)
</script>

</body>
</html>


