<?php
    @include 'configproduto.php';
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true))
    {
      unset($_SESSION['usuario']);
      unset($_SESSION['senha']); 
        header('Location: login/login.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Link para carregar os ícones da biblioteca Remix Icons -->
   <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- Link para o arquivo de estilos CSS -->
   <link rel="stylesheet" href="index.css">
   <link rel="icon" href="Icone.png">
   <title>Chefe em Casa</title>
</head>
<body>
   <header class="header">
      <nav class="nav container">
         <div class="nav__data">
            <!-- Logotipo da empresa com um ícone -->
            <a href="index.php" class="nav__logo">
                <i class="ri-cake-2-line"></i> 
                <span class="icon-text">Chefe em Casa</span>
            </a>
            <!-- Botão de alternância do menu -->
            <div class="nav__toggle" id="nav-toggle">
               <i class="ri-menu-line nav__burger"></i>
               <i class="ri-close-line nav__close"></i>
            </div>
         </div>
         <!-- Menu de navegação -->
         <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
               <!-- Itens do menu -->
               <li><a href="sistema.php" class="nav__link">Início</a></li>
               <li><a href="sobre/sobre-logado.php" class="nav__link">Sobre</a></li>
               <li><a href="adicionar-receita/admin_page.php" class="nav__link">Adicionar Receita</a></li>
               <!-- Menu suspenso 2 -->
               <li class="dropdown__item">
                  <div class="nav__link">Usuário <i class="ri-arrow-down-s-line dropdown__arrow"></i></div>
                  <ul class="dropdown__menu">
                     <!-- Subitens do menu suspenso 2 -->
                     <li><a href="login/login.php" class="dropdown__link"><i class="ri-star-line"></i> Favoritos</a></li>
                     <li><a href="#" class="dropdown__link" id="open-modal"><i class="ri-lock-line"></i> Política e Privacidade</a></li>
                     <li><a href="sair.php" class="dropdown__link"><i class="ri-logout-box-line"></i> Sair</a></li>
                  </ul>
               </li>
            </ul>
         </div>
      </nav>
   </header>

      <!-- Modal -->
    <div id="privacy-modal" class="modal">
    <div class="modal-content">
        <span class="modal-close">&times;</span>
        <h2>Política de Privacidade</h2>
        <hr size="5">
        <br>
        <p>No <strong>Chefe em Casa</strong>, respeitamos sua privacidade e estamos comprometidos em proteger suas informações pessoais. Coletamos dados como nome e e-mail para melhorar sua experiência no site e enviar atualizações sobre novas receitas e ofertas. Não compartilhamos suas informações com terceiros, exceto quando necessário por lei ou para prestar serviços em nosso nome. Utilizamos medidas de segurança para proteger suas informações, mas nenhuma transmissão de dados é completamente segura. Você tem o direito de acessar e corrigir suas informações pessoais, e pode entrar em contato conosco pelo e-mail contato@chefeemcasa.com para quaisquer dúvidas ou solicitações. Esta política pode ser atualizada periodicamente e recomendamos que você a revise ocasionalmente.</p>

    </div>
    </div>


   <br>
   <br>
   <br>
   <br>
   <br>

   <!--Carrossel de Imagens-->
   <div class="slideshow-container">
      <div class="mySlides fade">
          <img src="carrosel/1.png" style="width: 100%;">
      </div>
      <div class="mySlides fade">
          <img src="carrosel/2.png" style="width: 100%;">
      </div>
      <div class="mySlides fade">
          <img src="carrosel/3.png" style="width: 100%;">
      </div>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

  </div>
  <br>


    <!--Barra de Pesquisa-->

  <div class="search-container">
   <input type="text" placeholder="Pesquisar Receita">
   <button type="submit" class="search-button"><i class="fas fa-search"></i></button>
 </div>

  <br>
  <br>
  
  <!--Receitas-->
  <div class="receita-div">
   <span class="receita-text">Receitas</span>
  </div>
  <br>

  <!--Tela de Receitas-->
  <div class="receitas">
  <?php
    $select_products = mysqli_query($conn, "SELECT * FROM `products`");
    if(mysqli_num_rows($select_products) > 0){
        while($fetch_product = mysqli_fetch_assoc($select_products)){
  ?>
        <div class="food-items">
            <div class="imagem-receita">
                <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt=""></img>
            </div>
                <div class="details">
                    <div class="details-sub">
                        <h5><?php echo $fetch_product['name']; ?></h5>
                    </div>
                    <div class="obs"><?php echo $fetch_product['obs']; ?></div>
                    <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                    <input type="hidden" name="product_obs" value="<?php echo $fetch_product['obs']; ?>">
                    <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                    <input type="submit" class="btn" value="Ver Receita" name="ver_receita">
                </div>
        </div>
  <?php
        };
    };    
  ?>
  </div>
   <br>
   <!-- Script principal -->
   <script src="index.js"></script>
</body>
</html>
