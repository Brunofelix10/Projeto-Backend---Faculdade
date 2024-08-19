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
    <link rel="stylesheet" href="css/ConfigComum.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Nike - Configurações</title>
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
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Sobre-nós.php">Sobre nós</a>
            </li>
          </ul>
          <input type="checkbox" class="theme-checkbox">
          <ul class="navbar-nav ml-auto">
              <?php if ($loggedInUser): ?>
                <li class="nav-item">
                    <span class="nav-link">Bem-vindo! <?php echo htmlspecialchars($loggedInUser); ?> <br> <div class="type-user">Usuário Comum</div></span>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="ConfigComum.php">
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

      <div class="container">
  <div class="title">
    <h1>USUÁRIO COMUM</h1>
  </div>

  <div class="options">
    <a href="Principal.php" class="option back">
      <span>VOLTAR</span>
      <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0z"/>
        <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
      </svg>
    </a>

    <a href="redefinir_senha.php" class="option reset">
      <span>REDEFINIR SENHA</span>
      <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-spellcheck" viewBox="0 0 16 16">
        <path d="M8.217 11.068c1.216 0 1.948-.869 1.948-2.31v-.702c0-1.44-.727-2.305-1.929-2.305-.742 0-1.328.347-1.499.889h-.063V3.983h-1.29V11h1.27v-.791h.064c.21.532.776.86 1.499.86zm-.43-1.025c-.66 0-1.113-.518-1.113-1.28V8.12c0-.825.42-1.343 1.098-1.343.684 0 1.075.518 1.075 1.416v.45c0 .888-.386 1.401-1.06 1.401zm-5.583 1.035c.767 0 1.201-.356 1.406-.737h.059V11h1.216V7.519c0-1.314-.947-1.783-2.11-1.783C1.355 5.736.75 6.42.69 7.27h1.216c.064-.323.313-.552.84-.552s.864.249.864.771v.464H2.346C1.145 7.953.5 8.568.5 9.496c0 .977.693 1.582 1.704 1.582m.42-.947c-.44 0-.845-.235-.845-.718 0-.395.269-.684.84-.684h.991v.538c0 .503-.444.864-.986.864m8.897.567c-.577-.4-.9-1.088-.9-1.983v-.65c0-1.42.894-2.338 2.305-2.338 1.352 0 2.119.82 2.139 1.806h-1.187c-.04-.351-.283-.776-.918-.776-.674 0-1.045.517-1.045 1.328v.625c0 .468.121.834.343 1.067z"/>
        <path d="M14.469 9.414a.75.75 0 0 1 .117 1.055l-4 5a.75.75 0 0 1-1.116.061l-2.5-2.5a.75.75 0 1 1 1.06-1.06l1.908 1.907 3.476-4.346a.75.75 0 0 1 1.055-.117"/>
      </svg>
    </a>

    <a href="Mer.php" class="option mer">
        <span>MODELO DO BD</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" fill="currentColor" class="bi bi-database" viewBox="0 0 16 16" style="vertical-align: middle;">
        <path d="M4.318 2.687C5.234 2.271 6.536 2 8 2s2.766.27 3.682.687C12.644 3.125 13 3.627 13 4c0 .374-.356.875-1.318 1.313C10.766 5.729 9.464 6 8 6s-2.766-.27-3.682-.687C3.356 4.875 3 4.373 3 4c0-.374.356-.875 1.318-1.313M13 5.698V7c0 .374-.356.875-1.318 1.313C10.766 8.729 9.464 9 8 9s-2.766-.27-3.682-.687C3.356 7.875 3 7.373 3 7V5.698c.271.202.58.378.904.525C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777A5 5 0 0 0 13 5.698M14 4c0-1.007-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1s-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4v9c0 1.007.875 1.755 1.904 2.223C4.978 15.71 6.427 16 8 16s3.022-.289 4.096-.777C13.125 14.755 14 14.007 14 13zm-1 4.698V10c0 .374-.356.875-1.318 1.313C10.766 11.729 9.464 12 8 12s-2.766-.27-3.682-.687C3.356 10.875 3 10.373 3 10V8.698c.271.202.58.378.904.525C4.978 9.71 6.427 10 8 10s3.022-.289 4.096-.777A5 5 0 0 0 13 8.698m0 3V13c0 .374-.356.875-1.318 1.313C10.766 14.729 9.464 15 8 15s-2.766-.27-3.682-.687C3.356 13.875 3 13.373 3 13v-1.302c.271.202.58.378.904.525C4.978 12.71 6.427 13 8 13s3.022-.289 4.096-.777c.324-.147.633-.323.904-.525"/>
      </svg>
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




<script src="js/fonte.js"></script>
<script src="js/Principal.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
</body>
</html>