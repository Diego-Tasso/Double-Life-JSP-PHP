<?php
//Faz a conexão com o BD.
require 'conexao.php';

//Cria o SQL
//$sql1 = "SELECT * FROM medico where id=". $id_med;

$id_med = $_GET['id_med'];

$eventos=array();

$sql = "SELECT * FROM consultas WHERE id_medico=". $id_med;


//Executa o SQL
$result = $conn->query($sql);

//Existem formas mais simples tipo fetchAll,
//mas depende de versão do PHP
while($row = $result->fetch_assoc()) {
    $title = "Consulta";
    $description = "Esta é a descricao da sua consulta";
    $start = strtotime($row['data']);
    $end = strtotime($row['data']) + 2400;
    $start = date('Y-m-d H:i:s', $start);
    $end = date('Y-m-d H:i:s', $end);
    $color = "blue";
    
    $linha = array(
       'title' => $title,
       'description' => $description,
       'start' => $start,
       'end' => $end,
       'color' => $color,
    );
    array_push($linha, "Titulo=",$title);
    array_push($linha, $description);
    array_push($linha, $start);
    array_push($linha, $end);
    array_push($linha, $color);
    
    array_push($eventos, $linha);
}

//Transforma o array em um padrão json
$eventosjson = json_encode($eventos);

//O javascript recebe os dados
//Só pode haver um echo
echo $eventosjson;
?>