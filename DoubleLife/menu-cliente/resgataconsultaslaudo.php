<?php
    session_start();
    
    require "../conexao2.php";
    
    $sql = "SELECT * FROM consultas WHERE id_usuario=" . $_SESSION['id_usuario'];
    
    $result = $conn->query($sql);
    
    $row = $result->fetch_assoc();
    
    if($result->num_rows > 0){
        header("location: verlaudos.php?id_consulta=". $row['id']);
    } else {
        echo "Erro: " . $conn_error();
    }
?>