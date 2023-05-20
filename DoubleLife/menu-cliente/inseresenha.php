<?php
    session_start();
    require "conexao.php";
    
    $senha = $_POST["senha"];
    $email = $_GET["email"];
    $hash = password_hash($senha, PASSWORD_BCRYPT);
    $sql = "UPDATE usuarios SET senha='" . $hash . "' WHERE email='" . $email . "'";
    $result = $conn->query($sql);
    
    if($result === TRUE){
        header("Location: cadastro-login.php");
    }
?>