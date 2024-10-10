<?php
    session_start();

// print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha']))
    {
        // acessar
        include_once('config.php');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        // print_r('usuario: ' . $usuario);
        // print_r('<br>');
        // print_r('senha: ' . $senha);

        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";

        $result = $conexao->query($sql);

        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            header('Location: login/login.php');
        }
        else
        {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            header('Location: indexlogado.php');
        }
    }
    else
    {
        // não acessar
        header('Location: login/login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bem vindo</h1>
    <button>
        <a href="login/login.php">Deslogar</a>
    </button>
</body>
</html>