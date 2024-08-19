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
    <link rel="stylesheet" href="css/Sobre-nós.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Nike - Sobre Nós</title>
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
              <li class="nav-item">
                  <a class="nav-link" href="feminino.php">Feminino</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="infantil.php">Infantil</a>
              </li>
              <li class="nav-item current-page">
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
      <img class="banner-sobre-nos" src="img/banner-sobre-nos.png" alt="sobre-nos-banner">
    </div>

    <div class="Paragrafo">
        <div class="large-text">
                QUEM SOMOS?
      </div>

      <div class="small-text">

      Nike é uma empresa estadunidense de calçados, roupas e acessórios fundada em 1964 por Bill Bowerman e Philip Knight. Em 2016, foi considerada a marca de roupas mais valiosa do mundo, segundo o ranking BrandZ da consultoria Millward Brown, avaliada em US$ 37,472 bilhões. <br>
      A empresa tirou o seu nome da deusa grega da vitória, Nice. O famoso logotipo da empresa, é um desenho gráfico criado por Carolyn Davidson em 1971 e vendido por apenas US$ 35,00. Philip Knigth queria um logo que representasse aspecto de velocidade, a asa da deusa grega da vitória e que mostrasse uma empresa que queria chegar ao topo.<br>
      A empresa patrocina grandes nomes como Cristiano Ronaldo, Kylian Mbappé, Eden Hazard, Kevin De Bruyne, Virgil van Dijk, Harry Kane, Kyrie Irving, Rafael Nadal, Serena Williams, LeBron James, Cássio Ramos e Mo Farah. A marca é também responsável pelo estabelecimento da linha Air Jordan (criada em parceria com a estrela do basquete Michael Jordan). A Nike é ainda muito conhecida pelo seus tênis feitos em colaboração com outras marcas como mais recentemente a Off-White, liderada por Virgil Abloh. Entre os seus modelos mais conhecidos estão os da linha Air Max, como os Air Max 1, Air Max 90, ou Air Max 95.
      </div>
          </div>
          <div class="divider"></div>

          <div class="nossa-crença">
        <div class="step">
          NOSSA CRENÇA
      </div>

      <div class="step-small">
      “SE VOCÊ TEM UM CORPO, VOCÊ É UM ATLETA.”
      </div>

      <div class="step-smallest">
      –BILL BOWERMAN, COFUNDADOR DA NIKE
      </div>

      <div class="banner">
    <div class="banner-content">
        <img id="logo-escura-banner" class="logo-escura-nav" src="img/Nike logo.png" alt="Logo da Nike">
        <img id="logo-clara-banner" class="logo-clara-nav" src="img/Nike logo escuro.png" alt="Logo da Nike">
        <h2>NOSSOS PRINCÍPIOS</h2>
        <h3>Acreditamos que o esporte tem o poder de levar o mundo adiante. O que nos motiva nos capacita.</h3>
    </div>
</div>






    <div class="conteudo">
    <div class="Paragrafo-criar-momentos">
        <div class="large-text">
        CRIAR MOMENTOS

      </div>

      <div class="small-text">
      Já que existimos para servir aos atletas, nos atrevemos a moldar o futuro do esporte. Para nós, inovação é elevar o potencial humano. Somos obcecados pelas necessidades dos melhores atletas do mundo, usando as análises deles para criar produtos lindos e úteis. Para darmos grandes saltos, precisamos assumir grandes riscos. A mudança gradual não nos levará aonde queremos chegar rápido o bastante. É por isso que buscamos alcançar os objetivos mais ousados, como desenvolver o primeiro tênis que se amarra sozinho, correr a primeira maratona de duas horas e nos comprometer a usar energia 100% renovável em nossas instalações. Reunimos perspectivas diferentes — cientistas e designers de tênis, programadores e quarterbacks — para compartilharem o conhecimento do corpo em movimento. Trabalhamos com inúmeros designers e inovadores. Isso inclui cientistas da computação, biomecânicos, fisiologistas, químicos, desenvolvedores de materiais e, até mesmo, um astrofísico. Na Nike, está em nossa natureza inovar… e nossa missão é levar inspiração e inovação para cada atleta* do mundo.
      </div>
    
    </div>

    <div class="Paragrafo-criar-momentos">
        <div class="large-text">
              INOVANDO CADA PASSO
        </div>

      <div class="small-text">
      Na Nike, cada passo que damos é uma oportunidade de transformação. Nosso objetivo é maximizar o potencial humano por meio da inovação, dedicando-nos a servir os atletas e redefinindo o futuro do esporte. Estamos focados em entender e atender às exigências dos melhores atletas do mundo, convertendo suas percepções em produtos revolucionários e visualmente impressionantes.
      Para alcançar feitos extraordinários, adotamos uma mentalidade de risco calculado. A verdadeira inovação não é fruto de mudanças graduais; ela demanda coragem e visão. Por isso, nos comprometemos com metas ousadas, como criar o primeiro tênis autoligável, romper a barreira das duas horas na maratona e eliminar completamente o uso de plásticos descartáveis em nossas operações globais.
      Nossa abordagem integrada nos permite combinar diversas perspectivas, todos colaborando para explorar a ciência do movimento humano. Nossa equipe é composta por uma variedade de especialistas, incluindo desenvolvedores de software, biomecânicos, fisiologistas, químicos, engenheiros de materiais e até um climatologista.
      </div>
    
    </div>
    </div>

    <div class="divider"></div>

    <div class="nossa-crença">
        <div class="step">
        REDES SOCIAIS
      </div>

      <div class="step-smallest">
      A Nike está sempre publicando conteúdos novos e interessantes que proporcionam uma melhor<br> visão de tudo em que estamos trabalhando e as nossas motivações. Você pode nos encontrar e<br> nos seguir em todas estas plataformas:
</div>
      <div class="icons-social">
          <a href="https://www.facebook.com/nike/?locale=pt_BR" target="_blank"><i class="fab fa-facebook fa-3x"></i></a></li>
          <a href="https://www.instagram.com/nike/"target="_blank"><i class="fab fa-instagram fa-3x"></i></a></li>
          <a href="https://www.youtube.com/user/NIKE"target="_blank"><i class="fab fa-youtube fa-3x"></i></a></li>

      </div>

      <div class="divider"></div>



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
    
  <script src="js/Sobre-nós.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>

</body>
</html>