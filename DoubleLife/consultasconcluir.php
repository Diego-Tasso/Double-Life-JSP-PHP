<?php
    //require "conexao2.php";
    $id_usuario = $_SESSION['id_usuario'];
    $sql = "SELECT * FROM consultas WHERE id_usuario= $id_usuario";
    
    $result = $conn->query($sql);
    
while($row = $result->fetch_assoc()){
    $id_consulta = $row['id'];
    date_default_timezone_set('America/Sao_Paulo');
    $data_hoje = strtotime('now');
    //date('Y-m-d H:i:s');  
    $start = strtotime($row['data']);
    //$end = strtotime($row['data']) + 2400;
  //  $start = date('Y-m-d H:i:s', $start);
   // $end = date('Y-m-d H:i:s', $end);
    $resultado = $data_hoje - $start;
    if($resultado > 0){
        $sql1 = "UPDATE consultas SET status = 'concluida' WHERE id=" . $id_consulta;
        $result1 = $conn->query($sql1);
        if($result1 === TRUE){
//echo "chama o meunome mulhe";
        } else{
            echo "Erro: " . $conn->error();
            exit;
        }
    } else{
        //header('Location: ../historicoconsultas.php');
    }
}
?>