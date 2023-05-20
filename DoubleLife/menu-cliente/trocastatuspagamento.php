<?php
    session_start();
    require "conexao.php";

    $sql = "SELECT * FROM assinaturas WHERE id_usuario=" . $_SESSION['id_usuario'];

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    $data_atual = date('Y/m/d'); 
    $data_atual_timestamp = strtotime($data_atual); 
    $data_exp_timestamp = strtotime($row['data_exp']);

    if($data_exp_timestamp <= $data_atual_timestamp){
        $sql1 = "UPDATE assinaturas SET status = 'expirado' WHERE id_usuario=" . $_SESSION['id_usuario'];
        $result1 = $conn->query($sql1);
        if($result1 === TRUE){
            echo "Assinatura está pendente";
            echo $data_atual;
        }
    } else{
        echo "assinatura em dia.";
    }
?>