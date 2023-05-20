<?php
session_start();

//Cria variáveis com a sessão.
$logado = $_SESSION['nome'];

//Verifica o acesso.
if($_SESSION['tipo']=="a"){

//Faz a conexão com o BD.
require 'conexaoadmin.php';

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
$sql = "SELECT * FROM usuarios WHERE tipo = 'a' OR (tipo = 'c') ORDER BY id LIMIT $id, $total";

//Conta a quantidade total de registros
$sql1 = "SELECT count(*) as contagem FROM usuarios WHERE tipo = 'a' OR (tipo = 'c') ";

//Executa o SQL
$result = $conn->query($sql);
$result1 = $conn->query($sql1);

//Recupera o resultado da contagem
$row1 = $result1->fetch_assoc();
$contagem = $row1["contagem"];

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
            img {
                width: 50px;
                height: 50px;
            }
        </style>
     <link rel="shortcut icon" href="/imagens/Logo_Cubo_para_empresa_de_Arquitetura_Design_e_Engenharia_2.png" type="image/x-icon">
    <title>Controlar Usuários</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/estilos/tabela.css">
    <link rel="stylesheet" href="/estilos/styleadmin.css">
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
        include "menu-admin.php";
   ?>
        </div>
        <div class = "content">
        <div class="conteudo" style = "padding-top: 120px; margin-left: 80px">
                  
        <table id = "Tabela-Usuarios">
            <form><input type="button" value="Gerar PDF" onclick="getPDF()"></form>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>CPF</th>
                <th>CEP</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th> Data de nascimento </th>
                <th> Tipo </th>
                <th> Status </th>
                <th colspan = 3> Ações</th>
                
                
            	<?php
            	  while($row = $result->fetch_assoc()) {
            		echo "<tr><td>" .
            		$row["id"] . "</td><td>" .
            		$row["nome"] . "</td><td>" .
            		$row["email"] . "</td><td>" .
            		$row["senha"] . "</td><td>" .
            		$row["cpf"] . "</td><td>" .
            		$row["cep"] . "</td><td>" .
            		$row["endereco"] . "</td><td>" .
            		$row["telefone"] . "</td><td>" .
            		$row["data_nascimento"] . "</td><td>" .
            		$row["tipo"] . "</td><td>" .
            		$row["status"];
            	    
            	    echo "
                	    <td><a href='usuarioeditarform.php?id=" . $row["id"] . "'>
                	    <img src='/imagens/editar.png' alt='Editar Usuário'>
                	    </a>
                	    </td>
                	    <td><a href='usuariobloquear.php?id=" . $row["id"] . "&status=" . $row["status"] . "'>
                	    <img src='/imagens/Block.png' alt='Bloquear Usuário'>
                	    </a>
                	    </td>
                	    <td><a href='usuarioexcluir.php?id=" . $row["id"] . "'>
                	    <img src='/imagens/excluir.png' alt='Excluir Usuário'>
                	    </a>
                	    </td>
                	    </tr>
            	    ";
            	  }
            	?>
            	
        				
        </table>
        </div>
           <div class="pagination" style="margin-left: 80px">
                <?php for($i=1; $i <= $contagem; $i++) {
                        echo "<a href='controlarusuarios.php?pag=$i'>$i</a>";
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
	
//Se o usuário não usou o formulário
} else {
    header('Location: index.php'); //Redireciona para o form
    exit; // Interrompe o Script
}
?> 