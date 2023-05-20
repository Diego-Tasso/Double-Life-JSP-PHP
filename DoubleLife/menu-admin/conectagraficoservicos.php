<?php
include '../conexao2.php';

//Conta a quantidade total de registros por acesso
$sql1 = "SELECT count(*) as cardiologia FROM usuarios WHERE especialidade='cardiologia'";
$sql2 = "SELECT count(*) as geriatria FROM usuarios WHERE especialidade='geriatria'";
$sql3 = "SELECT count(*) as ginecologia FROM usuarios WHERE especialidade='ginecologia'";
$sql4 = "SELECT count(*) as oncologia FROM usuarios WHERE especialidade='oncologia'";
$sql5 = "SELECT count(*) as ortopedia FROM usuarios WHERE especialidade='ortopedia'";
$sql6 = "SELECT count(*) as pediatria FROM usuarios WHERE especialidade='pediatria'";
$sql7 = "SELECT count(*) as urologia FROM usuarios WHERE especialidade='urologia'";

//Executa o SQL
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);
$result4 = $conn->query($sql4);
$result5 = $conn->query($sql5);
$result6 = $conn->query($sql6);
$result7 = $conn->query($sql7);

//Prepara as contagens
$row1 = $result1->fetch_assoc();
$row2 = $result2->fetch_assoc();	
$row3 = $result3->fetch_assoc();
$row4 = $result4->fetch_assoc();
$row5 = $result5->fetch_assoc();
$row6 = $result6->fetch_assoc();
$row7 = $result7->fetch_assoc();

$num_cardiologia = $row1['cardiologia'];
$num_geriatria = $row2['geriatria'];
$num_ginecologia = $row3['ginecologia'];
$num_oncologia = $row4['oncologia'];
$num_ortopedia = $row5['ortopedia'];
$num_pediatria = $row6['pediatria'];
$num_urologia = $row7['urologia'];

//Fecha a conexão.	
$conn->close();
	
?>