<?php


session_start();
//Verifica o acesso.
$_SESSION['tipo']="a";
if($_SESSION['tipo']=="a"){

require '../conexao2.php';


$sql ="SELECT Data FROM pagamento" ;
$result=$conn->query($sql);
//Executa o sql e faz tratamento de erro.

$mes= array(0);


for ($i = 1 ; $i<=11 ; $i++ ){
$mes[]=0;


}



while ($row=$result->fetch_assoc()) {

$date = new DateTime($row["Data"]);
$month = $date->format("m");


$mes[$month-1]+= 1;

}



//Fecha a conexão.
	$conn->close();
	
//Se o usuário não tem acesso.
} else {
   header('Location: ../index.php'); //Redireciona para o form
    exit; // Interrompe o Script
}

?> 

<head>
    <meta charset="UTF-8">
   
    <title>Gráfico Financeiro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/estilos/style-graficos.css">
</head>

<body>
    <div>
        <a class="return-admin" href="graficos.php">Voltar</a>
    </div>
        <h1 id="Titulo2"> Gráfico de Balanço Financeiro </h1>
        
    <div class="wrapper">
        <canvas id="myChart"></canvas>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.0/Chart.min.js
"></script>

<script
>var ctx2 = document.getElementById('myChart');

var quantidades = [<?php echo json_encode($mes);?>];
var acessos = ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"];
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
    type: "line",
    data: {labels: acessos , 
    datasets: [{
label:"Lucro",
data: quantidades,
backgroundColor: graphColors,      
        borderColor: "rgba(217, 217, 217, 1)",
        hoverBorderColor: "rgba(255, 255, 255, 0.7)",
        hoverBackgroundColor: bordercolor,
        borderWidth: 2,
    }]
    },
options: {
    layout: {
      padding: 0
    },
    plugins: {
      legend: {
        display: true
      },
    labels: {
      render: 'percentage',
      precision: 1,
      position: 'border',
      fontColor: "rgba(0, 0, 0, 1)"
 }
}
}
}
)</script>

</body>
</html>

