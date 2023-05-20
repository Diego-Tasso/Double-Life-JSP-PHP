<?php
session_start();
// Conexão com o BD  
require_once 'conexao.php'; 
// Include configuration file  +
require_once 'config.php';
// Include Stripe PHP library 
require_once 'stripe-php/init.php';
// Set API key
\Stripe\Stripe::setApiKey('sk_test_51LZYF2IbSjMaEE1pgz6Gc2KljMrrY39d40JfCE0vKF7PrPnnBVyONEnM6UkbHFySNkppdHEzgL1vAqTPTDsbsCzj00gpp2Djh1');
$response = array(
    'status' => 0,
    'error' => array(
        'message' => 'Requisição inválida!'   
    )
);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$input = file_get_contents('php://input');
	$request = json_decode($input);	
}
if (json_last_error() !== JSON_ERROR_NONE) {
	http_response_code(400);
	echo json_encode($response);
	exit;
}
$productID = $request->ID;
$productPrice = $request->Price;

//O Id do cliente será lido da Sessão
$clienteId=1;
 
// Convert product price to cent 
$stripeAmount = round($productPrice*100, 2); 

if(!empty($request->checkoutSession)){
    // Create new Checkout Session for the order
    try {
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'product_data' => [
                        'name' => 'Assinatura DoubleLife',
                        'description' => 'Mensais, Semanais e Anuais',
                        'metadata' => [
                            'pro_id' => 1
                        ]
                    ],
                    'unit_amount' => $stripeAmount,
                    'currency' => 'brl',
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => STRIPE_SUCCESS_URL.'?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => STRIPE_CANCEL_URL,
            'metadata' => ['id_cliente' => $clienteId, 'id_plano' => $productID],
        ]);
    }catch(Exception $e) { 
        $api_error = $e->getMessage(); 
    }
    
    if(empty($api_error) && $session){
        $response = array(
            'status' => 1,
            'message' => 'Criação da Sessão concluida!',
            'sessionId' => $session['id']
        );
    }else{
        $response = array(
            'status' => 0,
            'error' => array(
                'message' => 'Criação da Sessão falhou! '.$api_error   
            )
        );
    }
}

// Return response
echo json_encode($response);