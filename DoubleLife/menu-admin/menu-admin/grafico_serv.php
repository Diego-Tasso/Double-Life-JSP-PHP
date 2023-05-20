<?php

include "../menu-admin/conectagraficoservicos.php";
?>
<head>
    <meta charset="UTF-8">
   
    <title>Gráfico de Serviços</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/estilos/style-graficos.css">
</head>

<body>
    <div>
        <a class="return-admin" href="graficos.php">Voltar</a>
    </div>
        <h1 id="Titulo2"> Gráfico de Serviços </h1>
        
    <div class="wrapper">
        <canvas id="myChart"></canvas>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.0/Chart.min.js
"></script>

<script
>var ctx2 = document.getElementById('myChart');

var quantidades = [<?php echo $num_cardiologia;?>,<?php echo $num_geriatria;?>,<?php echo $num_ginecologia;?>,<?php echo $num_oncologia;?>,<?php echo $num_ortopedia;?>,<?php echo $num_pediatria;?>,<?php echo $num_urologia;?>];
var acessos = ['Cardiologia','Geriatria','Ginecologia','Oncologia','Ortopedia','Pediatria','Urologia'];

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
    "rgba(255, 206, 86, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(255, 206, 86, 1)",
    "rgba(255, 99, 132, 1)",
    ],
    borderWidth: 5 // afeta a cor e a largura da borda 


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