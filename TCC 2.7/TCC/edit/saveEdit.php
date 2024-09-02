<?php
    if(isset($_POST['update']))
    {
        include_once('../config.php');

        $nome = $_POST['nome'];
        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sqlUpdate = "UPDATE usuarios SET fullnome = '$nome', usuario = '$usuario', email = '$email', senha = '$senha' 
        WHERE email = '$email';";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: ../sistema.php');
?>