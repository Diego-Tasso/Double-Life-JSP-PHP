<?php
    require "conexaoadmin.php";
    
    $sql = "SELECT * FROM usuarios";
    
    //Executa o SQL
    $result = $conn->query($sql);
    
    // Cria uma matriz com o resultado da consulta
    $row = $result->fetch_assoc();
    
    $pesquisa = $_POST['pesquisa'];
    
        
        
?>