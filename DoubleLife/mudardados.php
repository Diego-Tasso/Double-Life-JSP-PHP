<?php
    session_start();
    
    require "conexao2.php";
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $cep = $_POST['cep'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $data_nascimento = $_POST['data_nascimento'];
    //$id = $_SESSION['id_usuario'];
    
    $sql = "UPDATE usuarios SET nome='" . $nome . "', email='" . $email . "', cpf='" . $cpf . "', cep='" . $cep . "' , telefone='" . $telefone . "' , endereco='" . $endereco . "' , data_nascimento='" . $data_nascimento . "' WHERE id=" . $_SESSION['id_usuario'];
    
    if($conn->query($sql) === TRUE){
        
        $_SESSION['nome'] = $nome;
        $_SESSION['email'] = $email;
        $_SESSION['cpf'] = $cpf;
        $_SESSION['cep'] = $cep;
        $_SESSION['telefone'] = $telefone;
        $_SESSION['endereco'] = $endereco;
        $_SESSION['data_nascimento'] = $data_nascimento;
        
        header("Location: ../index.php");
    }
    else{
        echo"Erro";
    }
?>