<?php
    
    $especialidadeSelecionada = $_POST["especialidadeSelecionada"];
    
    require "conexao.php";
    
    if($especialidadeSelecionada == ""){
        $sql = "SELECT * FROM medico";
    } else{
        $sql = "SELECT * FROM medico where especialidade='$especialidadeSelecionada'";
    }
    
    $result = $conn->query($sql);
    
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $nome = $row["nome"];
            $especialidade = $row["especialidade"];
            $tempo = $row["tempo"];
            $avaliacao = $row["avaliacao"];
            
            echo"
                <div class='slide-container swiper'>
                    <div class='slide-content'>
                        <div class='card-wrapper swiper-wrapper'>
                            <div class='card swiper-slide'>
                                <div class='image-content'>
                                    <span class='overlay'></span>
        
                                    <div class='card-image'>
                                        <img src='images/imagem1cardiologia.jpg' alt='' class='card-img'>
                                    </div>
                                </div>
        
                                <div class='card-content'>
                                    <h2 class='name'>". $nome ."</h2>
                                    <p class='description'><b>Área de Atuação: </b><p id='especialidade'>". $especialidade ."</p><br><b>Tempo de atuação na DoubleLife: </b>". $tempo ."<br> <b>Avaliação: </b>". $avaliacao ."</p>
        
                                    <button class='button'>Ver mais</button>
                                </div>
                            </div>
            		    </div>
            	    </div>
            	</div>
    	";
        }
    } else {
    		echo "<h1>Nenhum resultado foi encontrado.</h1>";
    }
?>