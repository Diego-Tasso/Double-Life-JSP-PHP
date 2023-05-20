<?php
    session_start();
    require "conexao.php";
    require '../acessocomum.php';

    $sql = "SELECT * FROM assinaturas where id_usuario = " . $_SESSION['id_usuario'];

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if ($row['status'] == 'pago') {
        
    }
    else {
        echo"<script>
        window.alert('Você precisa de uma assinatura ativa!');
        </script>";
        header('Refresh: 0; url = escolherplano.php');
    }
?>