 <header class="header">

    <a href="/index.php"><img src="/imagens/Logo_Cubo_para_empresa_de_Arquitetura_Design_e_Engenharia_1.png" id="logo" alt="Logo da DoubleLife" title="Voltar para o Menu Principal"></a>

    <nav id="nav">

        

    <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">

        <span id="hamburger"></span>

    </button>

    

    <table id="menu">

        <tr>

            <td><a href="/menu-cliente/agendamento.php" id = "itens"> Agendamento</a></td>

            <td><a href="../services.php" id = "itens">Serviços</a></li>

            <td><a href="/menu-cliente/escolherplano.php" id = "itens">Nossos Planos</a></td>

        

        <?php

            if(!isset($_SESSION['email']) && !isset($_SESSION['senha'])){

                echo'<td><a id="login" href="/menu-cliente/cadastro-login.php">Login</a></td>';

            } 

            else {

        ?>

        <?php

            echo" <td><div class = 'dropd'> <a class='nome'>" . $_SESSION['nome'] . "</a>";

        ?>

        <div class="drop">

            <a href="../conta.php?id=<?php $_SESSION['id_usuario'] ?>">Gerenciar Conta</a>

            <a href="../historicoconsultas.php">Historico de consultas</a>

            <a href="/deslogar.php">Deslogar</a>

        </td>

        </div>

        </div>

    <?php

                }

            ?>

            </tr>

    </table>

    </nav>

  </header>

  <script src="js/menu-conta.js"></script>