<?php

  if(!empty($_GET['email']))
  {

    include_once('../config.php');

    $email = $_GET['email'];

    $sqlSelect = "SELECT * FROM usuarios WHERE email='$email'";

    $result = $conexao->query($sqlSelect);



    if($result->num_rows > 0)
    {

      while($user_data = mysqli_fetch_assoc($result))
      {
        $nome = $user_data['fullnome'];
        $usuario = $user_data['usuario'];
        $email = $user_data['email'];
        $senha = $user_data['senha'];
      }

    }
    else
    {
      header('Location: ../sistema.php');
    }

  }
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="icon" href="img/tenis.png">
    <link rel="stylesheet" href="edit.css" />
    <title>Editar Perfil</title>

    <!---google fonts--->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  </head>
  <body>
    <div class="container">
      <div class="card">

      <form action="saveEdit.php" method="POST">

        <h1>MEU PERFIL</h1>

        <div id="msgError"></div>
        <div id="msgSuccess"></div>

        <div class="label-float">
          <input type="text" name="nome" id="nome" placeholder=" " value="<?php echo $nome ?>" required />
          <label id="labelNome" for="nome">Nome Completo</label>
        </div>

        <div class="label-float">
          <input type="text" name="usuario" id="usuario" placeholder=" " value="<?php echo $usuario ?>" required />
          <label id="labelUsuario" for="usuario">Usuário</label>
        </div>

        <div class="label-float">
          <input type="text" name="email" id="email" placeholder=" " value="<?php echo $email ?>" required />
          <label id="labelemail" for="email">E-mail</label>
        </div>

        <div class="label-float">
          <input type="password" name="senha" id="senha" placeholder=" " value="<?php echo $senha ?>" required />
          <label id="labelSenha" for="senha">Senha</label>
          <i id="verSenha" class="fa fa-eye" aria-hidden="true"></i>
        </div>


        <div class="justify-center">
          <button onclick="voltar()">VOLTAR</button>
          <button onclick="cadastrar()" type="submit" name="update" id="update">CONFIRMAR</button>
        </div>

        </form>
      </div>
    </div>

    <script src="edit.js"></script>
  </body>
</html>