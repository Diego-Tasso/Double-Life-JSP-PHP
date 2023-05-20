<?php
    require "../conexao.php";
    
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $id_consulta = $_POST['id_consulta'];
    $id_medico = $_POST['id_medico'];
    $id_usuario = $_POST['id_usuario'];
    date_default_timezone_set('America/Sao_Paulo');
    $data_hoje = date('Y-m-d H:i');
    
    $sql = "INSERT INTO laudos (titulo, texto, data, id_consulta) VALUES ('$titulo', '$texto', '$data_hoje', '$id_consulta')";
    
    $result = $conn->query($sql);
    
    $sql1 = "SELECT * FROM laudos WHERE id_consulta=" . $id_consulta;
        
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();
    
    $id_laudo = $row1['id'];
    
    $sql2 = "UPDATE consultas SET id_laudo = $id_laudo, status='concluida' WHERE id = $id_consulta";
    
    $result2 = $conn->query($sql2);
    
    if($result === TRUE){
       header("location: laudo.php?id_consulta=" . $id_consulta . "&id_medico=" .  $id_medico . "&id_usuario=" .  $id_usuario); 
    } else{
        echo "Nenhum resultado encontrado";
    }
?>