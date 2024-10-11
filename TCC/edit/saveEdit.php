<?php

    include_once('../config.php');

    if(isset($_POST['update']))
    {
        $nome = $_POST['nome'];
        $usuario = $_POST['usuario'];
        $id = $_POST['id'];
        $senha = $_POST['senha'];
        $adm = $_POST['adm'];

        $sqlUpdate = "UPDATE usuarios SET fullnome = '$nome', usuario = '$usuario', id = '$id', senha = '$senha', adm ='$adm'
        WHERE id = '$id'";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: ../sistema.php');
?>