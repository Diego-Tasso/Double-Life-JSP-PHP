<?php
session_start();

//Faz a conexão com o BD.
require '../conexao2.php';

//Lê a página que será exibida

//Cria o SQL com limites de página ordenado por id
$sql = "SELECT usuarios.id as usuario, usuarios.nome, consultas.id as consulta, consultas.id_medico as medico, consultas.data FROM usuarios INNER JOIN consultas ON usuarios.id = consultas.id_medico and usuarios=" . $_SESSION['id_usuario'];

echo $sql;
//Executa o SQL
$result = $conn->query($sql);

//$row = $result->fetch_assoc();

	//Se a consulta tiver resultados
	 if ($result->num_rows > 0) {
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
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
     <link rel="shortcut icon" href="/imagens/Logo_Cubo_para_empresa_de_Arquitetura_Design_e_Engenharia_2.png" type="image/x-icon">
    <title>Controlar Consultas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/estilos/style.css">
    <link rel="stylesheet" href="/estilos/header-footer.css">
    <style>
        .disclaimer {
            display:none;
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
        include "../menu.php";
   ?>
        </div>
        <div class = "content">
        <div class="conteudo" style = "padding-top: 120px; margin-left: 80px">
        <div class = "TableClass">
        <table id = "Tabela-Usuarios">
            <tr>
                <th>Número da Consulta</th>
                <th>Nome do Médico</th>
                <th>Data</th>
                <th>Visualizar Laudo</th>
                
                
            	<?php
            	  while($row = $result->fetch_assoc()) {
            		echo "<tr><td>" .
            		$row["consulta"] . "</td><td>" .
            		$row["nome"] . "</td><td>" .
            		$row["data"];
            	   
            	   echo "
                	    <td><a href='../menu-med/laudo.php?id_consulta=" . $row["consulta"] . "&id_medico=" . $row["medico"] . "&id_usuario=" . $row["usuario"] ."'>
                	    <img src='/imagens/incluir.png' alt='Editar Usuário'>
                	    </a>
                	    </td>
";
            	  }
            	?>
        				
        </table>
        </div>
             
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