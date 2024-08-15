<?php
    session_start();
    // print_r($_SESSION);
    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: login/login.php');
    }
    $logado = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA</title>
</head>
<body>
    <h1>ACESSOU O SISTEMA</h1>
    <br>
    <div class="d-flex">
        <a href="sair.php" >Sair</a>
        <?php
        echo "<h1>Bem Vindo $logado</h1>";
        ?>
</body>
</html>