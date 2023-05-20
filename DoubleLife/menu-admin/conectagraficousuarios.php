<?php

//Faz a conexão com o BD.
include '../conexao2.php';

//Conta a quantidade total de registros por acesso
$sql1 = "SELECT count(*) as admin FROM usuarios WHERE tipo='a'";
$sql2 = "SELECT count(*) as comum FROM usuarios WHERE tipo='c'";
$sql3 = "SELECT count(*) as medico FROM usuarios WHERE tipo='m'";

//Executa o SQL
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);

//Prepara as contagens
$row1 = $result1->fetch_assoc();
$row2 = $result2->fetch_assoc();	
$row3 = $result3->fetch_assoc();

$num_admin = $row1['admin'];
$num_comum = $row2['comum'];
$num_medico = $row3['medico'];

//Fecha a conexão.	
$conn->close();
	
?>