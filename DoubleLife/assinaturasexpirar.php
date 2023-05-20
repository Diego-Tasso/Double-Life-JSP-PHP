<?php

    $id_usuario = $_SESSION['id_usuario'];
    $sql = "SELECT * FROM assinaturas WHERE id_usuario= $id_usuario";
    
    $result = $conn->query($sql);
if ($result === TRUE){
    while($row = $result->fetch_assoc()){
        $id_assinatura = $row['id'];
        date_default_timezone_set('America/Sao_Paulo');
        $data_hoje = strtotime('now');
        //date('Y-m-d H:i:s');  
        $data_exp = strtotime($row['dt_exp']);
        //$end = strtotime($row['data']) + 2400;
    //  $start = date('Y-m-d H:i:s', $start);
    // $end = date('Y-m-d H:i:s', $end);
        $resultado = $data_hoje - $data_exp;
        if($resultado > 0){
            $sql1 = "UPDATE assinaturas SET status = 'expirada' WHERE id=" . $id_assinatura;
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
} else{

}

?>