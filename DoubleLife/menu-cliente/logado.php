<?php
//Verifica se o usuário logou.
if(!isset ($_SESSION['email']) || !isset ($_SESSION['senha']) || !isset ($_SESSION['nome']) || !isset ($_SESSION['tipo']))
{
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  unset($_SESSION['nome']);
  unset($_SESSION['tipo']);
  header('location:../index.php');
  exit;
}else{
//Verifica se o acesso é Admin
	if($_SESSION['tipo']!="a"){
		    header('location:../index.php'); //Redireciona para o form
			exit; // Interrompe o Script
	} else{
	   header('location:../menu-admin/indexadmin.php');
	}
}
?>