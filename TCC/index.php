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
               <li><a href="index.php" class="nav__link">Início</a></li>
               <li><a href="sobre/sobre.php" class="nav__link">Sobre</a></li>
               <!-- Menu suspenso 1 -->
               <li class="dropdown__item">
                  <div class="nav__link">Receitas <i class="ri-arrow-down-s-line dropdown__arrow"></i></div>
                  <ul class="dropdown__menu">
                     <!-- Subitens do menu suspenso 1 -->
                     <li><a href="login/login.php" class="dropdown__link">Adicionar Receita</a></li>
                     <!-- Submenu do menu suspenso 1 -->
                     <li class="dropdown__subitem">
                        <div class="dropdown__link">Categorias <i class="ri-add-line dropdown__add"></i></div>
                        <ul class="dropdown__submenu">
                           <!-- Itens do submenu do menu suspenso 1 -->
                           <li><a href="categorias_receitas/faceis.php" class="dropdown__sublink">Fáceis</a></li>
                           <li><a href="categorias_receitas/saudaveis.php" class="dropdown__sublink">Saudáveis</a></li>
                           <li><a href="categorias_receitas/bebidas.php" class="dropdown__sublink">Bebidas</a></li>
                           <li><a href="categorias_receitas/doces.php" class="dropdown__sublink">Doces</a></li>
                           <li><a href="categorias_receitas/salgados.php" class="dropdown__sublink">Salgados</a></li>
                           <li><a href="categorias_receitas/bolos.php" class="dropdown__sublink">Bolos</a></li>
                        </ul>
                     </li>
                  </ul>
               </li>
               <!-- Menu suspenso 2 -->
               <li class="dropdown__item">
                  <div class="nav__link">Usuário <i class="ri-arrow-down-s-line dropdown__arrow"></i></div>
                  <ul class="dropdown__menu">
                     <!-- Subitens do menu suspenso 2 -->
                     <li><a href="login/login.php" class="dropdown__link"><i class="ri-user-line"></i> Login</a></li>
                     <li><a href="#" class="dropdown__link" id="open-modal"><i class="ri-lock-line"></i> Política e Privacidade</a></li>
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
  <br>
  <div class="receitas">
   <div class="food-items">
       <img src="imagem-receita/burger.jpg">
       <div class="details">
           <div class="details-sub">
               <h5>Hamburguer Gostoso</h5>
               <h5 class="price"> <i class="ri-timer-line"></i> 30min </h5>
           </div>
           <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit reiciendis nam non quia! Earum eveniet minus. Facilis explicabo natus nihil voluptatem eveniet pariatur.</p>
           <button id="irAteReceita">VER RECEITA</button>
       </div>
   </div>

   <div class="food-items">
       <img src="imagem-receita/chicken.jpeg">
       <div class="details">
           <div class="details-sub">
               <h5>Frango Assado</h5>
               <h5 class="price"> <i class="ri-timer-line"></i> 25min </h5>
           </div>
           <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit dolor sit amet consectetur adipisicing elit.</p>
           <button id="irAteReceita">VER RECEITA</button>
       </div>
   </div>

   <div class="food-items">
       <img src="imagem-receita/soup.jpeg">
       <div class="details">
           <div class="details-sub">
               <h5>Sopa para o Frio</h5>
               <h5 class="price"> <i class="ri-timer-line"></i> 1h </h5>
           </div>
           <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus quibusdam facilis, magni consectetur necessitatibus.</p>
           <button id="irAteReceita">VER RECEITA</button>
       </div>
   </div>

   <div class="food-items">
       <img src="imagem-receita/Spaghetti.jpeg">
       <div class="details">
           <div class="details-sub">
               <h5>Macarão de Ervas</h5>
               <h5 class="price"> <i class="ri-timer-line"></i> 12min </h5>
           </div>
           <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit lorem ipsum, dolor sit amet consectetur adipisicing elit</p>
           <button id="irAteReceita">VER RECEITA</button>
       </div>
   </div>

   <div class="food-items">
       <img src="imagem-receita/salmon.jpeg">
       <div class="details">
           <div class="details-sub">
               <h5>Salmão Assado</h5>
               <h5 class="price"> <i class="ri-timer-line"></i> 45min </h5>
           </div>
           <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit</p>
           <button id="irAteReceita">VER RECEITA</button>
       </div>
   </div>

   <div class="food-items">
       <img src="imagem-receita/Sandwich.jpeg">
       <div class="details">
           <div class="details-sub">
               <h5>Sanduiche Natural</h5>
               <h5 class="price"> <i class="ri-timer-line"></i> 10min </h5>
           </div>
           <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus reiciendis nam non quia! Earum eveniet quia minus nemo.</p>
           <button id="irAteReceita">VER RECEITA</button>
       </div>
   </div>
   <div class="food-items">
      <img src="imagem-receita/burger.jpg">
      <div class="details">
          <div class="details-sub">
              <h5>Hamburguer Gostoso</h5>
              <h5 class="price"> <i class="ri-timer-line"></i> 30min </h5>
          </div>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit reiciendis nam non quia! Earum eveniet minus. Facilis explicabo natus nihil voluptatem eveniet pariatur.</p>
          <button id="irAteReceita">VER RECEITA</button>
      </div>
  </div>

  <div class="food-items">
      <img src="imagem-receita/chicken.jpeg">
      <div class="details">
          <div class="details-sub">
              <h5>Frango Assado</h5>
              <h5 class="price"> <i class="ri-timer-line"></i> 25min </h5>
          </div>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit dolor sit amet consectetur adipisicing elit.</p>
          <button id="irAteReceita">VER RECEITA</button>
      </div>
  </div>
</div>
<br>

  <!--Botão de ver mais Receitas-->
  <br>
  <div class="container_botao">
   <a href="login/login.php">
      <button class="ver_mais"  >VER MAIS</button>
   </a>
  </div>
   <br>
   <!-- Script principal -->
   <script src="index.js"></script>
</body>
</html>
