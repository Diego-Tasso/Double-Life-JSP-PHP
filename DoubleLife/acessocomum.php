<?php
//Verifica se o usuário logou.
if(!isset ($_SESSION['email']) || !isset ($_SESSION['senha']))
{echo"<script>
        window.alert('Você precisa estar logado!');
    </script>";
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Refresh: 0; url = /menu-cliente/cadastro-login.php');
  exit;
}
?>