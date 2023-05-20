<?php
session_start();
require '../conexao2.php';
//Para ver o número de adms e comuns

$sql="SELECT count(*) as adm FROM usuarios WHERE Acesso='Admin'";
$resultcont=$conn->query($sql);
$row = $resultcont->fetch_assoc();

   $numadm =  $row['adm'];  
    $sql="SELECT count(*) as usuariosc FROM usuarios WHERE tipo='c'";
    
    $sql1="SELECT count(*) as usuariosa FROM usuarios WHERE tipo='a'";
    
    $sql2="SELECT count(*) as usuariosm FROM usuarios WHERE tipo='m'";
    
$result=$conn->query($sql);
$row = $result->fetch_assoc();

$result1=$conn->query($sql1);
$row1 = $result1->fetch_assoc();

$result2=$conn->query($sql2);
$row2 = $result2->fetch_assoc();

 $numusuarios= $row['usuariosc'];
 $numusuariosa= $row1['usuariosa'];
 $numusuariosm= $row2['usuariosm'];

?>