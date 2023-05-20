<?php
session_start();
// Include configuration file 
require_once 'conexao.php';

    $session_id = $_GET['session_id'];   

        // Include Stripe PHP library 
        require_once 'stripe-php/init.php';
        
        // Set API key
        \Stripe\Stripe::setApiKey('sk_test_51LZYF2IbSjMaEE1pgz6Gc2KljMrrY39d40JfCE0vKF7PrPnnBVyONEnM6UkbHFySNkppdHEzgL1vAqTPTDsbsCzj00gpp2Djh1');
        
        // Fetch the Checkout Session to display the JSON result on the success page
        try {
            $checkout_session = \Stripe\Checkout\Session::retrieve($session_id);
        }catch(Exception $e) { 
            $api_error = $e->getMessage(); 
        }

//$id_cliente = $checkout_session->metadata->id_cliente;
$id_plano = $checkout_session->metadata->id_plano;
$valor = $checkout_session->amount_total;
$dt_inicio = date('Ymd');

switch($id_plano){
    case 1:
        $dt_exp = date('Ymd', strtotime('+30 days'));
        break;
    case 2:
        $dt_exp = date('Ymd', strtotime('+90 days'));
        break;
    case 3:
        $dt_exp = date('Ymd', strtotime('+365 days'));
        break;
}

echo "<hr>";

$sqlid = "SELECT * FROM assinaturas where id_usuario = " . $_SESSION['id_usuario'];

    $result = $conn->query($sqlid);
    $row = $result->fetch_assoc();

    if ($row['status'] == 'pago'){
        echo"<script>
        window.alert('Seu plano está pago!');
        </script>";
    } else{
        $sql = "INSERT INTO assinaturas(id_plano, id_usuario, dt_inicio, dt_exp, status) VALUES( $id_plano," . $_SESSION            ['id_usuario'] . ", $dt_inicio, $dt_exp,'pago')";
        } 

//Executa o SQL e faz tratamento de erros
if ($conn->query($sql) === TRUE) {
  
  echo "<h1 class='mensagemerro'>Você será redirecionado em 3 segundos!</h1>";
} else { 
  echo "Error: " . $sql . "<br>" . $conn->error;
}

//Fecha a conexão.
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<title>Pagamento Concluido!</title>
<meta charset="utf-8">
</body>
</html>