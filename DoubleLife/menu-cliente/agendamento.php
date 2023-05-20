<?php
    session_start();
    //include "../menu-cliente/trocastatuspagamento.php";
    require "../acessocomum.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <link rel="stylesheet" href="../estilos/header-footer.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <link rel="stylesheet" href="../estilos/slider-medico.css">
    <link rel="shortcut icon" href="../imagens/Logo_Cubo_para_empresa_de_Arquitetura_Design_e_Engenharia_2.png" type="image/x-icon">
</head>

<style>
    .header{
        position: absolute;
    }
    .swiper-horizontal>.swiper-pagination-bullets, .swiper-pagination-bullets.swiper-pagination-horizontal,                   .swiper-pagination-custom, .swiper-pagination-fraction {
        bottom: 100px;
        left: 0;
        width: 100%;
    }
</style>

<body>

 <?php
 
    include '../menu.php';
    require "conexao.php";
    include "../verificastatusassinatura.php";
 ?>
    
    <div class="container-geral">
 <form id="botaoenviar" action="agendamento.php" method="post">
    <select name="especialidadeSelecionada">
        <option value="" selected></option>
        <option value="Cardiologia">Cardiologia</option>
        <option value="Dermatologia">Dermatologia</option>
        <option value="Pediatria">Pediatria</option>
        <option value="Psiquiatria">Psiquiatria</option>
        <option value="Geriatria">Geriatria</option>
        <option value="Ginecologia">Ginecologia</option>
        <option value="Oncologia">Oncologia</option>
        <option value="Ortopedia">Ortopedia</option>        
        <option value="Urologia">Urologia</option>
    </select>
    <input value="enviar" type="submit">
 </form>

    <section>
    <div class='swiper mySwiper container'>
    <div class='swiper-wrapper content'>
    
    <?php
    $especialidadeSelecionada = $_POST["especialidadeSelecionada"];
    
    if($especialidadeSelecionada == ""){
        $sql = "SELECT * FROM usuarios where tipo='m' ORDER BY nome";
    } else{
        $sql = "SELECT * FROM usuarios where especialidade='$especialidadeSelecionada'";
    }
    
    $result = $conn->query($sql);
    
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            
            $id = $row["id"];
            $nome = $row["nome"];
            $especialidade = $row["especialidade"];
                
            echo"            
            <div class='swiper-slide card'>
          <div class='card-content'>
            <div class='image'>
              <img src='" . $row ["pfp"] . "' alt=''>
            </div>

            <div class='name-profession'>
              <span class='name'>". $nome ."</span>
              <span class='profession'>".$especialidade."</span>
            </div>

            <div class='button'>
              <form method='post' action='eventoscontrolar.php?id_medico=". $id."'>
                <input type='submit' class='aboutMe' value='Ver Agenda'>
              </form>
            </div>
          </div>
        </div>
        ";       
        }
    } else {
    		echo "<h1>Nenhum resultado foi encontrado.</h1>";
    } 
?>
    

</section>

<div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
</div>
</div>

    <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
    
    
</body>