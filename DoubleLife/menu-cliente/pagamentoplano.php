<?php
    require "conexao2.php";
    
    $sql = "SELECT * FROM pagamento WHERE status = 'realizado'";
    
    $result = $conn->query($sql);
    
while($row = $result->fetch_assoc()){
    
    date_default_timezone_set('America/Sao_Paulo');
    $data_hoje = strtotime('now');
    //date('Y-m-d H:i:s');  
    $start = strtotime($row['data']);
    //$end = strtotime($row['data']) + 2400;
  //  $start = date('Y-m-d H:i:s', $start);
   // $end = date('Y-m-d H:i:s', $end);
    
    if($data_hoje > $start){
        $sql1 = "UPDATE consultas SET status = 'concluida' WHERE id_usuario = $id_usuario";
        $result1 = $conn->query($sql1);
        if($result1 === TRUE){
echo "chama o meunome mulhe";
        } else{
            echo "Erro: " . $conn->error();
            exit;
        }
    } else{
        //header('Location: ../historicoconsultas.php');
    }
}
?>