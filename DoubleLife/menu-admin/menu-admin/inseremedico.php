<?php
    require "../conexao2.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $especialidade = $_POST['especialidade'];
    $data_entrada = $_POST['data_entrada'];
    $faculdade = $_POST['faculdade'];
    //$imagem = $_POST['imagem'];
    
    $hash = password_hash($senha, PASSWORD_BCRYPT);
    
    $sql = "INSERT INTO usuarios(nome, email, senha, especialidade, data_entrada, faculdade, consulta, tipo) VALUES('$nome', '$email', '$hash','$especialidade', '$data_entrada', '$faculdade', '0', 'm')";
    
    $result = $conn->query($sql);
    
    if($result === TRUE){
        header("Location: indexadmin.php");
    } else{
        echo "Erro: " . $conn->error;
        
    }
?>