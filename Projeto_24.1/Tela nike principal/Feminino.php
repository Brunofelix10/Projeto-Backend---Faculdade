<?php
include 'auth.php';
$loggedInUser = checkLogin();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon/Logo Nike.png" type="image/x-icon">
    <link rel="stylesheet" href="css/Feminino.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Nike - Feminino</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand logo-clara-nav" id="logo" href="principal.php"><img src="img/Nike logo.png" alt="Logo Nike"></a>
          <a class="navbar-brand logo-escura-nav" id="logo-escura" href="principal.php"><img src="img/Nike logo escuro.png" alt="Logo Nike"> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="principal.php">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="lancamento.php">Lançamentos</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="masculino.php">Masculino</a>
              </li>
              <li class="nav-item current-page">
                  <a class="nav-link" href="feminino.php">Feminino</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="infantil.php">Infantil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Sobre-nós.php">Sobre nós</a>
            </li>
          </ul>
          <input type="checkbox" class="theme-checkbox">
          <ul class="navbar-nav ml-auto">
              <?php if ($loggedInUser): ?>
                <li class="nav-item">
                    <span class="nav-link">Bem-vindo! <?php echo htmlspecialchars($loggedInUser); ?></span>
                </li>
                <a class="nav-link" href="<?php echo $_SESSION['tipo_usuario'] === 'master' ? 'ConfigMaster.php' : 'ConfigComum.php'; ?>">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
            <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
        </svg>
    </a>
</li>
                <li class="nav-item">
                    <a class="nav-link logout" href="?logout=true">Sair</a>
                </li>
              <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="pag_cadastro.php">Cadastre-se</a>
                </li>
              <?php endif; ?>
          </ul>
          </div>
        </div>
      </nav>

    <div class="video-container">
    <video class="responsive-video" autoplay muted loop>
        <source src="img/feminino Vídeo.mp4" type="video/mp4">
    </video>
    </div>

    <div class="banner">
  <div class="small-text">Nike Tops & Leggings</div>
  <div class="large-text">
      ENCONTRE A<br>SUA SENSAÇÃO
  </div>
  <div class="small-text">
      Tudo que você precisa para o seu dia.
  </div>
</div>

<div class="tops-leggings-button">
<a href="#Tops-leggings">
<button type="button">Ver Coleção</button>
</a>
</div>

<div class="Top-Nike-Swoosh">
      <img class="Top-Nike" src="img/Top Nike Swoosh.avif" alt="Top-Nike-Swoosh">
    </div>

    <div class="banner">
  <div class="small-text">Top Nike Swoosh</div>
  <div class="large-text">
      DESENVOLVIDO PARA SE<br>SENTIR MAIS SEGURA
  </div>
  <div class="small-text">
      Uma sensação de compreessão que faz você querer ultrapassar seus limites 
  </div>
</div>

<div class="tops-leggings" id="Tops-leggings">
  <p>NIKE TOPS & LEGGINGS</p>   
</div>

<div class="container-all">
  <div class="container-arrows">
    <button class="prev-button">&lt;</button>
    <button class="next-button">&gt;</button>
  </div>
<div class="container-cards-carousel" style="overflow-x: hidden;">
 <div class="container-cards">
  <div class="card">
    <img src="img/Produtos/Top Nike Alate Minimalist Feminino.avif" alt="Top-Nike-Alate-Minimalist-Feminino">
    <div class="descricao">Top Nike Alate Minimalist Feminino </div>
    <div class="precos">
    <div class="preco-oferta">R$ 180,49</div>   
    <div class="preco-original">R$ 249,99</div>
    </div>
    <div class="desconto">28% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card">
    <img src="img/Produtos/Top Nike Swoosh Flyknit Feminino.avif" alt="Top-Nike-Swoosh-Flyknit-Feminino">
    <div class="descricao">Top Nike Swoosh Flyknit Feminino</div>
    <div class="precos">
    <div class="preco-oferta">R$ 408,49</div>   
    <div class="preco-original">R$ 449,99</div>
    </div>
    <div class="desconto">9% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card">
    <img src="img/Produtos/Legging Nike Go Feminina.avif" alt="Legging-Nike-Go-Feminina">
    <div class="descricao">Legging Nike Go Feminina</div>
    <div class="precos">
    <div class="preco-oferta">R$ 465,49</div>   
    <div class="preco-original">R$ 649,99</div>
    </div>
    <div class="desconto">28% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card">
    <img src="img/Produtos/Legging Nike Pro 365 Feminina.avif" alt="Legging-Nike-Pro-365-Feminina">
    <div class="descricao"> Legging Nike Pro 365 Feminina</div>
    <div class="precos">
    <div class="preco-oferta">R$ 237,49</div>   
    <div class="preco-original">R$ 329,99</div>
    </div>
    <div class="desconto">28% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card">
    <img src="img/Produtos/Legging Nike One Feminina.avif" alt="Legging-Nike-One-Feminina">
    <div class="descricao">Legging Nike One Feminina</div>
    <div class="precos">
    <div class="preco-oferta">R$ 227,99</div>   
    <div class="preco-original">R$ 299,99</div>
    </div>
    <div class="desconto">24% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card">
    <img src="img/Produtos/Top Nike Dri-FIT Indy Feminino.avif" alt="Top-Nike-Dri-FIT-Indy-Feminino">
    <div class="descricao"> Top Nike Dri-FIT Indy Feminino</div>
    <div class="precos">
    <div class="preco-oferta">R$ 151,99</div>   
    <div class="preco-original">R$ 199,99</div>
    </div>
    <div class="desconto">24% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>


  <div class="card">
    <img src="img/Produtos/Top Nike Sportswear Corset Feminino.avif" alt="Top-Nike-Sportswear-Corset-Feminino">
    <div class="descricao">Top Nike Sportswear Corset Feminino</div>
    <div class="precos">
    <div class="preco-oferta">R$ 256,49</div>   
    <div class="preco-original">R$ 449,99</div>
    </div>
    <div class="desconto">43% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card">
    <img src="img/Produtos/Legging Nike Dri-FIT One Luxe Feminina.avif" alt="Legging-Nike-Dri-FIT-One-Luxe-Feminina">
    <div class="descricao">Legging Nike One Luxe Feminina</div>
    <div class="precos">
    <div class="preco-oferta">R$ 550,99</div>   
    <div class="preco-original">R$ 579,99</div>
    </div>
    <div class="desconto">5% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>
</div>

 </div>
</div>


<div class="Nike-Versair">
      <img class="Nike-Versair-img" src="img/Nike Versair.avif" alt="Nike-Versair">
    </div>

    <div class="banner">
  <div class="large-text">
      NIKE VERSAIR
  </div>
  <div class="small-text">
      Ideal e versátil para todos os estilos de treino
  </div>
</div>

<div class="nike-versair-button">
<a href="#tenis-esportivos">
<button type="button">Ver Lançamento</button>
</a>
</div>

<div class="Nike-Metcon9">
      <img class="Nike-Metcon9-img" src="img/Nike Metcon 9.jpg" alt="Nike-Metcon9">
    </div>

    <div class="banner">
  <div class="large-text">
      METCON 9
  </div>
  <div class="small-text">
      Seus pés mais firmes do que nunca.<br> Supere seus limites com conforto, estabilidade e confiança.
  </div>
</div>

<div class="tenis-esportivos" id="tenis-esportivos">
  <p>TÊNIS ESPORTIVOS</p>   
</div>

<div class="container-all">
  <div class="container-arrows">
    <button class="prev-button">&lt;</button>
    <button class="next-button">&gt;</button>
  </div>
<div class="container-cards-carousel" style="overflow-x: hidden;">
 <div class="container-cards">
  <div class="card">
    <img src="img/Produtos/Tênis Nike Versair Feminino.avif" alt="Tênis-Nike-Versair-Feminino">
    <div class="descricao">Tênis Nike Versair Feminino</div>
    <div class="precos">
    <div class="preco-oferta">R$ 645,99</div>   
    <div class="preco-original">R$ 999,99</div>
    </div>
    <div class="desconto">35% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card">
    <img src="img/Produtos/Tênis Nike Metcon 9 Feminino.avif" alt="Tênis-Nike-Metcon-9-Feminino">
    <div class="descricao"> Tênis Nike Metcon 9 Feminino</div>
    <div class="precos">
    <div class="preco-oferta">R$ 854,99</div>   
    <div class="preco-original">R$ 1199,99</div>
    </div>
    <div class="desconto">29% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card">
    <img src="img/Produtos/Tênis Nike Versair Feminino Branco.avif" alt="Tênis-Nike-Versair-Feminino-Branco">
    <div class="descricao">Tênis Nike Versair Feminino Neutral</div>
    <div class="precos">
    <div class="preco-oferta">R$ 807,49</div>   
    <div class="preco-original">R$ 999,99</div>
    </div>
    <div class="desconto">19% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card">
    <img src="img/Produtos/Tênis Nike Metcon 9 AMP Feminino.avif" alt="Tênis-Nike-Metcon-9-AMP-Feminino">
    <div class="descricao">Tênis Nike Metcon 9 AMP Feminino</div>
    <div class="precos">
    <div class="preco-oferta">R$ 968,99</div>   
    <div class="preco-original">R$ 1299,99</div>
    </div>
    <div class="desconto">25% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card">
    <img src="img/Produtos/Tênis Nike Metcon 9 EasyOn Feminino.avif" alt="Tênis-Nike-Metcon-9-EasyOn-Feminino">
    <div class="descricao"> Tênis Nike Metcon 9 EasyOn Feminino</div>
    <div class="precos">
    <div class="preco-oferta">R$ 968,99</div>   
    <div class="preco-original">R$ 1199,99</div>
    </div>
    <div class="desconto">19% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card">
    <img src="img/Produtos/Tênis Nike Versair Feminino Roxo.avif" alt="Tênis-Nike-Versair-Feminino-Roxo">
    <div class="descricao">Tênis Nike Versair Feminino Roxo</div>
    <div class="precos">
    <div class="preco-oferta">R$ 778,99</div>   
    <div class="preco-original">R$ 999,99</div>
    </div>
    <div class="desconto">22% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card">
    <img src="img/Produtos/Tênis Nike Metcon 9 Feminino Roxo.avif" alt="Tênis-Nike-Metcon-9-Feminino">
    <div class="descricao">Tênis Nike Metcon 9 Feminino</div>
    <div class="precos">
    <div class="preco-oferta">R$ 1139,99</div>   
    <div class="preco-original">R$ 1199,99</div>
    </div>
    <div class="desconto">5% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card">
    <img src="img/Produtos/Tênis Nike Versair Feminino Preto.avif" alt="Tênis-Nike-Versair-Feminino-Preto">
    <div class="descricao">Tênis Nike Versair Feminino Preto</div>
    <div class="precos">
    <div class="preco-oferta">R$ 807,49</div>   
    <div class="preco-original">R$ 999,99</div>
    </div>
    <div class="desconto">19% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>
</div>

 </div>
</div>


<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="left-footer">
                    <ul class="list-unstyled ">
                        <li class="li-top"><a href="#"><p>Encontre Uma Loja Nike</p></a></li>
                        <li><a href="pag_cadastro.php"><p>Cadastre-se para receber novidades</p></a></li>
                        <li><a href="#"><p>Cartão Presente</p></a></li>
                        <li><a href="#"><p>Mapa do Site</p></a></li>
                        <li><a href="#"><p>Nike Journal</p></a></li>
                    </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <h5>Ajuda</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Dúvidas Gerais</a></li>
                        <li><a href="#">Encontre seu Tamanho</a></li>
                        <li><a href="#">Entregas</a></li>
                        <li><a href="#">Pedidos</a></li>
                        <li><a href="#">Trocas e Devoluções</a></li>
                        <li><a href="#">Pagamentos</a></li>
                        <li><a href="#">Produtos</a></li>
                        <li><a href="#">Corporativo</a></li>
                        <li><a href="#">Fale Conosco</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Sobre a Nike</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Propósito</a></li>
                        <li><a href="#">Sustentabilidade</a></li>
                        <li><a href="#">Sobre a Nike, Inc.</a></li>
                        <li><a href="#">Sobre o Grupo SBF</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Redes sociais</h5>
                    <div class="social-icons">
                    <ul>
                    <li class="#"><a href="https://www.facebook.com/nike/?locale=pt_BR" target="_blank"><i class="fab fa-facebook fa-3x"></i></a></li>
                    <li class="#"><a href="https://www.instagram.com/nike/"target="_blank"><i class="fab fa-instagram fa-3x"></i></a></li>
                    <li class="#"><a href="https://www.youtube.com/user/NIKE"target="_blank"><i class="fab fa-youtube fa-3x"></i></a></li>
                  </ul>
      
                    </div>
                    <h5>Formas de pagamento</h5>
                    <div class="payment-icons">
                        <img src="img/Banks/mastercard.png" alt="Mastercard">
                        <img src="img/Banks/Visa.webp" alt="Visa">
                        <img src="img/Banks/Amex.png" alt="AMEX">
                        <img src="img/Banks/Elo.png" alt="Elo">
                        <img src="img/Banks/Hipercard.png" alt="Hipercard">
                        <img src="img/Banks/Discover.png" alt="Discover">
                        <img src="img/Banks/Pix.webp" alt="PIX">
                    </div>
                </div>
            </div>
            <div class="separator"></div>
            <div class="footer-bottom row">
              <div class="col-md-12 d-flex justify-content-between">
                <p>Brasil</p>
                    <p><a href="#">Política de Privacidade</a></p>
                    <p><a href="#">Termos de Uso</a></p>
                </div>
                <div class="col-md-12 text-center">
                  <p class="ending">© 2024 Nike. Este site foi desenvolvido para fins acadêmicos e não possui nenhuma intenção comercial.</p>
                </div>
            </div>
        </div>
      </footer>

      <div class='accesibility'>
  <a title='Diminuir' aria-label='Diminuir' id='decreaseFontSize'>A-</a>
  <a title='Aumentar' aria-label='Aumentar' id='increaseFontSize'>A+</a>
</div>   

<script src="js/fonte.js"></script>



<script src="js/Feminino.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>

</body>
</html>    