<?php

include "../menu-admin/conectagraficousuarios.php";
?>
<head>
    <meta charset="UTF-8">
   
    <title>Gráfico de Usuários</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/estilos/style-graficos.css">
</head>

<body>
    <div>
        <a class="return-admin" href="graficos.php">Voltar</a>
    </div>
    <h1 id="Titulo2"> Gráfico de Usuários </h1>
        
    <div class="wrapper">
        <canvas id="myChart"></canvas>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.0/Chart.min.js
"></script>

<script
>var ctx2 = document.getElementById('myChart');

var quantidades = [<?php echo $num_admin;?>,<?php echo $num_comum;?>,<?php echo $num_medico;?>];
var acessos = ['Administradores','Usuários','Médicos'];
const graphColors = [];
const bordercolor = [];
for (i = 0; i < acessos.length; i++){
  const r = Math.floor(Math.random() * 255);
  const g = Math.floor(Math.random() * 255);
  const b = Math.floor(Math.random() * 255);
  graphColors.push('rgba('+r+', '+g+', '+b+', 1)');
  bordercolor.push('rgba('+r+', '+g+', '+b+', 0.8)');
}
var pieChart= new Chart(ctx2, {
    type: "bar",
    data: {labels: acessos , 
    datasets: [
{
label:"Acessos",
data: quantidades,
backgroundColor: graphColors,      
        borderColor: "rgba(217, 217, 217, 1)",
        hoverBorderColor: "rgba(255, 255, 255, 1)",
        hoverBackgroundColor: bordercolor,
        borderWidth: 1,


}

    ]
    }




  //  options: {
//maintainAspectRatio: false ,//para fazer ele siguir a altura q tu botou na tag
//responsive: false//para fazer ele seguir a largura q tu botou na  tag html
  //  } // this is optional
//configuration object which allows you specify the chart type, data and 
//chart options.
 }
)</script>

</body>
</html>
