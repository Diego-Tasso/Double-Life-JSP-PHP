<?php
    require "../conexao2.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $especialidade = $_POST['especialidade'];
    $data_entrada = $_POST['data_entrada'];
    $faculdade = $_POST['faculdade'];
    
    // Dados que vem do formulário
    /* CARREGAR IMAGEM DENTRO DE UMA PASTA */
    $dir = "../imagens/pfp";
    echo $dir;
    //Recebe o arquivo do formulário
    $imagem = $_FILES["pfp"];

    if (move_uploaded_file($imagem["tmp_name"], "$dir/".$imagem["name"])){
        echo "Arquivo enviado com sucesso :)";
    } else {
        echo "Fudeu meu nobre :(";
    }

    $pfp = "$dir/".$imagem["name"];

    
    $hash = password_hash($senha, PASSWORD_BCRYPT);
    
    $sql = "INSERT INTO usuarios(nome, email, senha, especialidade, data_entrada, faculdade, consulta, tipo, pfp) VALUES('$nome', '$email', '$hash','$especialidade', '$data_entrada', '$faculdade', '0', 'm', '$pfp')";
    
    $result = $conn->query($sql);
    
    if($result === TRUE){
        header("Location: indexadmin.php");
    } else{
        echo "Erro: " . $conn->error;
        
    }
?>