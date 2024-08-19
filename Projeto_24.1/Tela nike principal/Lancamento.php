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
    <link rel="stylesheet" href="css/Lancamento.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Nike - Lançamentos</title>
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
              <li class="nav-item current-page">
                  <a class="nav-link" href="lancamento.php">Lançamentos</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="masculino.php">Masculino</a>
              </li>
              <li class="nav-item">
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
    <div class="img-container">
      <img class="Corinthians-banner" src="img/Banner Corinthians.png" alt="new-Corinthians-banner">
    </div>

    <div class="banner">
        <div class="small-text">Veste a Luta</div>
        <div class="large-text">
            NOVAS CAMISAS<br>DO CORINTHIANS
        </div>
        <div class="small-text">
            Um compromisso com a história negra do timão<br> e um símbolo da luta antirracista no Futebol.
        </div>
    </div>

    <div class="img-container">
      <img class="fastpack-banner" src="img/fastpack banner.png" alt="fastpack-banner">
    </div>
    
    <div class="banner">
        <div class="small-text">Fast Pack</div>
        <div class="large-text">
            DÊ TUDO DE SI
        </div>
        <div class="small-text">
            Vencer é tudo quando você é o seu próprio adversário.<br> Novas cores do Alphafly, Vaporfly e Streakfly.
        </div>
    </div>

    <div class="novidades">
        <p>NOVIDADES</p>   
    </div>

    <div class="container-all">
        <div class="container-arrows">
          <button class="prev-button">&lt;</button>
          <button class="next-button">&gt;</button>
        </div>
      <div class="container-cards-carousel" style="overflow-x: hidden;">
       <div class="container-cards">
        <div class="card">
          <img src="img/Produtos/Camisa Nike Corinthians II Torcedor.avif" alt="Camisa-Nike-Corinthians-II-Torcedor">
          <div class="descricao">Camisa Nike Corinthians II 2024/25 Torcedor Pro Masculina</div>
          <div class="precos">
          <div class="preco-oferta">R$ 332,49</div>   
          <div class="preco-original">R$ 349,99</div>
          </div>
          <div class="desconto">5% off</div>
          <button class="botao-comprar">Comprar</button>
        </div>
      
        <div class="card">
          <img src="img/Produtos/Camisa Nike Corinthians I Jogador.avif" alt="Camisa-Nike-Corinthians-I-Jogador">
          <div class="descricao">Camisa Nike Corinthians I 2024/25 Jogador Masculina</div>
          <div class="precos">
          <div class="preco-oferta">R$ 664,99</div>   
          <div class="preco-original">R$ 699,99</div>
          </div>
          <div class="desconto">5% off</div>
          <button class="botao-comprar">Comprar</button>
        </div>
      
        <div class="card">
          <img src="img/Produtos/Short Nike Dri-FIT Strike Masculino.avif" alt="Short-Nike-Strike-Masculino">
          <div class="descricao">Shorts Nike Dri-FIT Strike Masculino Soft</div>
          <div class="precos">
          <div class="preco-oferta">R$ 284,99</div>   
          <div class="preco-original">R$ 299,99</div>
          </div>
          <div class="desconto">5% off</div>
          <button class="botao-comprar">Comprar</button>
        </div>
      
        <div class="card">
          <img src="img/Produtos/Tênis Nike Air Force 1 '07 LV8 Masculino.avif" alt="Tenis-Nike-Air-Force-1-Lv8-Masculino">
          <div class="descricao">Tênis Nike Air Force 1 '07 LV8 Masculino</div>
          <div class="precos">
          <div class="preco-oferta">R$ 569,99</div>   
          <div class="preco-original">R$ 899,99</div>
          </div>
          <div class="desconto">37% off</div>
          <button class="botao-comprar">Comprar</button>
        </div>
      
        <div class="card">
          <img src="img/Produtos/Camisa-polo-Nike-Sportswear-Brasil.avif" alt="Camisa-polo-Nike-Sportswear-Brasil">
          <div class="descricao">Camisa Polo Nike Sportswear Brasil Matchup Masculina</div>
          <div class="precos">
          <div class="preco-oferta">R$ 313,99</div>   
          <div class="preco-original">R$ 329,99</div>
          </div>
          <div class="desconto">5% off</div>
          <button class="botao-comprar">Comprar</button>
        </div>
      
        <div class="card">
          <img src="img/Produtos/Tênis Nike Air Zoom Alphafly 3 Feminino.avif" alt="Tênis-Nike-Air-Zoom-Alphafly-3-Feminino">
          <div class="descricao">Tênis Nike Air Zoom Alphafly 3 Feminino</div>
          <div class="precos">
          <div class="preco-oferta">R$ 2374,99</div>   
          <div class="preco-original">R$ 2499,99</div>
          </div>
          <div class="desconto">5% off</div>
          <button class="botao-comprar">Comprar</button>
        </div>
      
      
        <div class="card">
          <img src="img/Produtos/Camiseta Nike Sportswear Classic Feminina.avif" alt="Camiseta-Nike-Sportswear-classic-feminina">
          <div class="descricao">Camiseta Nike Sportswear Classic Feminina</div>
          <div class="precos">
          <div class="preco-oferta">R$ 256,49</div>   
          <div class="preco-original">R$ 329,99</div>
          </div>
          <div class="desconto">22% off</div>
          <button class="botao-comprar">Comprar</button>
        </div>
      
        <div class="card">
          <img src="img/Produtos/Calça Nike Corinthians Fleece III Masculina.avif" alt="Calça-Nike-Corinthians-Fleece-III-Masculina">
          <div class="descricao">Calça Nike Corinthians Fleece III Masculina</div>
          <div class="precos">
          <div class="preco-oferta">R$ 246,99</div>   
          <div class="preco-original">R$ 349,99</div>
          </div>
          <div class="desconto">29% off</div>
          <button class="botao-comprar">Comprar</button>
        </div>
      </div>
      
       </div>
      </div>


      <div class="img-container">
        <img src="img/MAD READY PACK.jpg" alt="Chuteiras">
      </div>

      <div class="banner">
        <div class="small-text">Lançamento</div>
        <div class="large-text">
            MAD READY PACK
        </div>
        <div class="small-text">
            Com precisão, toque e velocidade em seus pés, <br> você está pronto pra tudo.
        </div>
    </div>


    <div class="Membro-Nike">
      <p>Membro Nike</p>   
  </div>

  <div class="junte-se-a-nos">
    <img class="junte-se-a-nos-img logo-clara" src="img/Nike logo.png" alt="Junte-se-a-nos-nike">
    <img class="junte-se-a-nos-img logo-escura" src="img/Nike logo escuro.png" alt="Junte-se-a-nos-nike">

    <h1 class="junte-se-a-nos-txt"> Onde Todos os Atletas <br> se Encontram </h1>
    <p>As coisas ficam melhores quando se é um membro da Nike.<br>Tenha acesso exclusivo em primeira mão aos novos lançamentos,inovações, frete grátis, benefícios especiais de aniversário<br> e muito mais.</p>
     
  </div>

<div class="junte-se-a-nos-buttons">
  <div class="junte-se-a-nos-button">
    <a href="pag_cadastro.php">
    <button type="button">Junte-se a Nós</button>
    </a>
</div>

<div class="junte-se-a-nos-button">
  <a href="login.php">
  <button type="button">Entrar</button>
  </a>
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
<script src="js/fonte2.js"></script>
<script src="js/Lancamento.js"></script>
</body>
</html>