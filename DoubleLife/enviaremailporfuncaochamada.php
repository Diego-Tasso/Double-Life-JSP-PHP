<?php

//Código normal do seu projeto. Daí, precisamos enviar um email.
//$email = $_GET['email'];
//Código reutilizável para enviar emails.
require './enviaremailporfuncaocodigo.php';

//Chamada da função no do código
enviaremail('Felipe', 'gamesf130@gmail.com', 'Email', 'Teste');

?>