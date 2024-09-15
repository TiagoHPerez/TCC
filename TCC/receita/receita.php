<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link para carregar os ícones da biblioteca Remix Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 
    <!-- Link para o arquivo de estilos CSS -->
    <link rel="stylesheet" href="receita.css">
    <link rel="icon" href="Icone.png">
    <title>Chefe em Casa</title>
</head>
<body>
    <header class="header">
        <nav class="nav container">
           <div class="nav__data">
              <!-- Logotipo da empresa com um ícone -->
              <a href="../index.php" class="nav__logo">
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
                 <li><a href="../index.php" class="nav__link">Início</a></li>
                 <li><a href="../sobre.php" class="nav__link">Sobre</a></li>
                 <!-- Menu suspenso 1 -->
                 <li class="dropdown__item">
                    <div class="nav__link">Receitas <i class="ri-arrow-down-s-line dropdown__arrow"></i></div>
                    <ul class="dropdown__menu">
                       <!-- Subitens do menu suspenso 1 -->
                       <li><a href="../login/login.php" class="dropdown__link">Adicionar Receita</a></li>
                       <!-- Submenu do menu suspenso 1 -->
                       <li class="dropdown__subitem">
                          <div class="dropdown__link">Categorias <i class="ri-add-line dropdown__add"></i></div>
                          <ul class="dropdown__submenu">
                             <!-- Itens do submenu do menu suspenso 1 -->
                             <li><a href="../categorias_receitas/faceis.php" class="dropdown__sublink">Fáceis</a></li>
                             <li><a href="../categorias_receitas/saudaveis.php" class="dropdown__sublink">Saudáveis</a></li>
                             <li><a href="../categorias_receitas/bebidas.php" class="dropdown__sublink">Bebidas</a></li>
                             <li><a href="../categorias_receitas/doces.php" class="dropdown__sublink">Doces</a></li>
                             <li><a href="../categorias_receitas/salgados.php" class="dropdown__sublink">Salgados</a></li>
                             <li><a href="../categorias_receitas/bolos.php" class="dropdown__sublink">Bolos</a></li>
                          </ul>
                       </li>
                    </ul>
                 </li>
                 <!-- Menu suspenso 2 -->
                 <li class="dropdown__item">
                    <div class="nav__link">Usuário <i class="ri-arrow-down-s-line dropdown__arrow"></i></div>
                    <ul class="dropdown__menu">
                       <!-- Subitens do menu suspenso 2 -->
                       <li><a href="../login/login.php" class="dropdown__link"><i class="ri-user-line"></i> Login</a></li>
                       <li><a href="../politica.php" class="dropdown__link"><i class="ri-lock-line"></i> Política e Privacidade</a></li>
                    </ul>
                 </li>
              </ul>
           </div>
        </nav>
     </header>
     <br>
     <br>
     <br>
     <br>
     <br>

    <!-- TELA DA RECEITA -->
    <main class="page">
        <div class="recipe-page">
          <section class="recipe-hero">
            <img
              src="burger.jpg"
              class="img recipe-hero-img"
            />
            <article class="recipe-info">
              <h2>Hamburguer Gostoso</h2>
              <p>
                Shabby chic humblebrag banh mi bushwick, banjo kale chips
                meggings. Cred selfies sartorial, cloud bread disrupt blue bottle
                seitan. Dreamcatcher tousled bitters, health goth vegan venmo
                whatever street art lyft shabby chic pitchfork beard. Drinking
                vinegar poke tbh, iPhone coloring book polaroid truffaut tousled
                ramps pug trust fund letterpress. Portland four loko austin
                chicharrones bitters single-origin coffee. Leggings letterpress
                occupy pour-over.
              </p>
              <div class="recipe-icons">
                <article>
                  <i class="fas fa-clock"></i>
                  <h5>Tempo de preparo:</h5>
                  <p>30 min.</p>
                </article>
                <article>
                  <i class="fas fa-user-friends"></i>
                  <h5>Servem até:</h5>
                  <p>1 pessoa</p>
                </article>
                <article>
                    <i class="ri-creative-commons-nc-line"></i>
                    <h5>Custo:</h5>
                    <p>Médio</p>
                </article>
              </div>
            </article>
          </section>
<br>
<div class="buttons-container">
    <button class="btn btn-favorite">
        <span class="icon-circle"><i class="ri-heart-line"></i></span>
        Favoritar
    </button>
    <button class="btn btn-share">
        <span class="icon-circle"><i class="ri-share-line"></i></span>
        Compartilhar
    </button>
    <button class="btn btn-print">
        <span class="icon-circle"><i class="ri-printer-line"></i></span>
        Imprimir
    </button>
</div>

          <!-- content -->
          <section class="recipe-content">
            <article>
              <h4>Modo de preparo</h4>
              <!-- single instruction -->
              <div class="single-instruction">
                <header>
                  <p>Passo 1</p>
                  <div></div>
                </header>
                <p>
                  I'm baby mustache man braid fingerstache small batch venmo
                  succulents shoreditch.
                </p>
              </div>
              <!-- end of single instruction -->
              <!-- single instruction -->
              <div class="single-instruction">
                <header>
                  <p>Passo 2</p>
                  <div></div>
                </header>
                <p>
                  Pabst pitchfork you probably haven't heard of them, asymmetrical
                  seitan tousled succulents wolf banh mi man bun bespoke selfies
                  freegan ethical hexagon.
                </p>
              </div>
              <!-- end of single instruction -->
              <!-- single instruction -->
              <div class="single-instruction">
                <header>
                  <p>Passo 3</p>
                  <div></div>
                </header>
                <p>
                  Polaroid iPhone bitters chambray. Cornhole swag kombucha
                  live-edge.
                </p>
              </div>
              <!-- end of single instruction -->
            </article>
            <article class="second-column">
              <div>
                <h4>ingredientes</h4>
                <p class="single-ingredient">1 1/2 cups dry pancake mix</p>
                <p class="single-ingredient">1/2 cup flax seed meal</p>
                <p class="single-ingredient">1 cup skim milk</p>
              </div>
            </article>
          </section>
        </div>
      </main>
</body>
</html>