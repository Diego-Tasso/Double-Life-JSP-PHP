<?php
session_start();

//Faz a conexão com o BD.
require 'conexao2.php';

include "consultasconcluir.php";

//Lê a página que será exibida
$id = $_GET["pag"];

//Quantidade de registros a serem exibidos
$total = 5;

//Indica o registro limite para paginação
if($id!=1){
    $id = $id -1;
    $id = $id * $total + 1;
}

$id--;

//Cria o SQL com limites de página ordenado por id
$sql = "SELECT * FROM consultas WHERE id_usuario = " . $_SESSION['id_usuario'] . " AND status='agendada' ORDER BY id LIMIT $id, $total";

//Conta a quantidade total de registros
$sql1 = "SELECT count(*) as contagem FROM consultas";

//Executa o SQL
$result = $conn->query($sql);
$result1 = $conn->query($sql1);

//$row = $result->fetch_assoc();
$row1 = $result1->fetch_assoc();
$contagem = $row1["contagem"];

//$sql2 = "SELECT * FROM usuarios WHERE id=" . $row["id_medico"];

//$result2 = $conn->query($sql2);

//Recupera o resultado da contagem

//$row2 = $result2->fetch_assoc();

if($contagem%$total==0){
    $contagem=$contagem/$total;
}else{
    $contagem=$contagem/$total + 1;    
}

	//Se a consulta tiver resultados
	 if ($result->num_rows > 0) {
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <style>
            .ver {
                width: 50px;
                height: 50px;
            }
        </style>
     <link rel="shortcut icon" href="/imagens/Logo_Cubo_para_empresa_de_Arquitetura_Design_e_Engenharia_2.png" type="image/x-icon">
    <title>Controlar Consultas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/estilos/style.css">
    <link rel="stylesheet" href="/estilos/header-footer.css">
    <style>
        .TableClass table {
         font-family: Arial, Helvetica, sans-serif;
          width: 100%;
        }
        
        .TableClass td, th {
          border: 2px solid #CCC9C9;
          padding: 15px;
        }
        .TableClass table {
            
        }
        .TableClass th {
            
            
            border: 2px solid #033351;
        }
        .TableClass tr:nth-child(even){
            background-color: #f2f2f2;
        }
        
        .TableClass tr:hover {
            background-color: #ddd;
            
        }
        
        .TableClass th {
          padding-top: 12px;
          padding-bottom: 12px;
          background-color: #024873;
          color: white;
        }
        .TableClass .pagination {
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: 2px;
        }
        .TableClass .pagination a {
            background-color: #024873;
            color: white;
            text-decoration: none;
            font-weight: bold;
            border: 2px solid black;
            padding: 10px;
            transition: 0.5s;
            
        } 
        .TableClass .pagination a:hover {
            background-color: #002942;
            opacity: 1;
                
        } 
    </style>
    
    <!-- PDF I - Bibliotecas para gerar PDF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.4/jspdf.plugin.autotable.min.js"></script>
    
    <!-- PDF II - Arquivo com o código para gerar PDF -->
    <script src="/js/pdf.js"></script>
    </head>
    <body>
        <div class = "header">
        <!--Header-->
   <?php
        include "menu.php";
   ?>
   
        </div>
        <div class = "TableClass">
        <div class = "content">
        <div class="conteudo" style = "padding-top: 120px; margin-left: 80px">
                  
        <table id = "Tabela-Usuarios">
            <form><input type="button" value="Gerar PDF" onclick="getPDF()"></form>
            <tr>
                <th>Médico</th>
                <th>Data</th>
                <th colspan = 3> Ações</th>
                
                
            	<?php
            	  while($row = $result->fetch_assoc()) {
            		echo "<tr><td>" .
            		$row["id_medico"] . "</td><td>" .
            		$row["data"];
            	    
            	    echo "
            	       
                	    <td><a href='consultasexcluir.php?id=" . $row["id"] . "'>
                	    <img class = 'ver' src='/imagens/excluir.png' alt='Excluir Usuário'>
                	  
                	    </a>
                	    </td>
                	    </tr>
            	    ";
            	  }
            	?>
            	
        				
        </table>
        </div>
        
        </div>
           <div class="pagination" style="margin-left: 80px">
                <?php for($i=1; $i <= $contagem; $i++) {
                        echo "<a href='consultas.php?pag=$i'>$i</a>";
                } 
            	?>   
            </div>  
            </div> 
           
    </div>
    </body>
    <script>
    
    function myFunction() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("pesquisar");
      filter = input.value.toUpperCase();
      table = document.getElementById("Tabela-Usuarios");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
      }
    }
    
</script>

</html>

<?php
	//Se a consulta não tiver resultados  			
	} else {
		echo "<h1>Nenhum resultado foi encontrado.</h1>";
	}
	
//Fecha a conexão.	
	$conn->close();
?> 