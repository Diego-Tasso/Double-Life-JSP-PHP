<?php 
    session_start();

    $sql = "SELECT * FROM assinaturas WHERE id_usuario =" . $_SESSION["id_usuario"];

    $result = $conn->query($sql);

        $row = $result->fetch_assoc();

        if ($row["status"] == "pago") {

        }
        else { 
            header('location: /menu-cliente/escolherplano.php');
        }

   


?>