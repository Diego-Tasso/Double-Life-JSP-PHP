<html>
<head>
<style>
    .mainmenubtn {
        background-color: rgb(0, 110, 255);
        color: white;
        border: none;
        cursor: pointer;
        padding:20px;
        margin-top:-2px;
        padding: 7px 19px 7px 19px;
        background-color: rgb(0, 110, 255);
        border-radius: 20px;
        transition: 0.2s;
    }
    .mainmenubtn:hover {
        border-radius: 20px 20px 0px 0px;
        background-color: rgb(8, 37, 76);
        }
    .dropdown {
        text-align: left;
        position: absolute;
        display: inline-block;
    }
    .dropdown-child {
        display: none;
        background-color: rgb(0, 110, 255);
        min-width: 200px;
    }
    .dropdown-child a {
        font-weight: BOLD;
        color: white;
        padding: 15px;
        text-decoration: none;
        display: block;
    }
    .dropdown:hover .dropdown-child {
        display: block;
        border-radius: 0px 20px 20px 20px;
    }
    .dropdown:hover .mainmenubtn {
        border-radius: 10px 10px 0px 0px;
        background-color: rgb(8, 37, 76);
    }
    
</style>
</head>
<body>
    <div class="dropdown">
    <?php
        echo"<button class='mainmenubtn'>" . $_SESSION['nome'] . "</button>";
    ?>
    <div class="dropdown-child">
        <a href="indexadmin.php" id = "dropdown-a">Principal</a>
        <a href="contaadmin.php" id = "dropdown-a">Gerenciar Conta</a>
        <a href="/deslogar.php" id = "dropdown-a">Deslogar</a>
    </div>
</div>
</body>
</html>