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
    <link rel="stylesheet" href="css/Infantil.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Nike - Infantil</title>
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
              <li class="nav-item current-page">
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
        <source src="img/Infantil Vídeo.mp4" type="video/mp4">
    </video>
    </div>

    <div class="banner">
  <div class="small-text">Inspire-se com a Fadinha: O Futuro do Skate</div>
  <div class="large-text">
      NOVAS FADAS<br>VAI NO NOVO
  </div>
  <div class="small-text">
  Deixe-se inspirar pela sua jornada e veja como a Nike apoia os jovens atletas a alcançar o impossível.
  </div>
</div>


<div class="Nike-Infantil">
      <img class="Nike-Infantil" src="img/Infantil Foto.jpg" alt="Nike-Infantil">
    </div>

    <div class="banner">
  <div class="small-text">Conforto e tendência para todas as fases da infância.</div>
  <div class="large-text">
    Crescendo com Estilo
  </div>
  <div class="small-text">
  Descubra nossa coleção que combina conforto e tendência para todos os momentos.
  </div>
</div>

<div class="Nike-Infantil-button">
<a href="#coleção-infantil">
<button type="button">Ver Coleção</button>
</a>
</div>

<div class="coleção-infantil" id="coleção-infantil">
  <p>COLEÇÃO INFANTIL</p>   
</div>

<div class="container-all">
  <div class="container-arrows">
    <button class="prev-button">&lt;</button>
    <button class="next-button">&gt;</button>
  </div>
<div class="container-cards-carousel" style="overflow-x: hidden;">
 <div class="container-cards">
  <div class="card">
    <img src="img/Produtos/Camiseta Nike Dri-FIT Miler Infantil.avif" alt="Camiseta-Nike-Dri-FIT-Miler-Infantil">
    <div class="descricao">Camiseta Nike Dri-FIT Miler Infantil</div>
    <div class="precos">
    <div class="preco-oferta">R$ 170,99</div>   
    <div class="preco-original">R$ 179,99</div>
    </div>
    <div class="desconto">5% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card">
    <img src="img/Produtos/Shorts Nike Sportswear Infantil.avif" alt="Shorts-Nike-Sportswear-Infantil">
    <div class="descricao">Shorts Nike Sportswear Infantil</div>
    <div class="precos">
    <div class="preco-oferta">R$ 132,99</div>   
    <div class="preco-original">R$ 179,99</div>
    </div>
    <div class="desconto">26% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card">
    <img src="img/Produtos/Tênis Nike Air Force 1 Infantil.avif" alt="Tênis-Nike-Air-Force-1-Infantil">
    <div class="descricao">Tênis Nike Air Force 1 Infantil</div>
    <div class="precos">
    <div class="preco-oferta">R$ 664,99</div>   
    <div class="preco-original">R$ 699,99</div>
    </div>
    <div class="desconto">5% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card">
    <img src="img/Produtos/Camisa Nike Corinthians II 24-25 Torcedor Pro Infantil.avif" alt="Legging-Nike-Pro-365-Feminina">
    <div class="descricao"> Camisa Nike Corinthians II Infantil</div>
    <div class="precos">
    <div class="preco-oferta">R$ 284,99</div>   
    <div class="preco-original">R$ 299,99</div>
    </div>
    <div class="desconto">5% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card">
    <img src="img/Produtos/Chuteira Nike Phantom GX II Club Infantil Campo.avif" alt="Chuteira-Nike-Phantom-Infantil-Campo">
    <div class="descricao">Chuteira Nike Phantom Infantil Campo</div>
    <div class="precos">
    <div class="preco-oferta">R$ 284,99</div>   
    <div class="preco-original">R$ 399,99</div>
    </div>
    <div class="desconto">29% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card">
    <img src="img/Produtos/Vestido Nike Sportswear Infantil.avif" alt="Vestido-Nike-Sportswear-Infantil">
    <div class="descricao"> Vestido Nike Sportswear Infantil</div>
    <div class="precos">
    <div class="preco-oferta">R$ 199,49</div>   
    <div class="preco-original">R$ 249,99</div>
    </div>
    <div class="desconto">20% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>


  <div class="card">
    <img src="img/Produtos/Mochila Nike Brasilia Infantil.avif" alt="Mochila-Nike-Brasilia-Infantil">
    <div class="descricao">Mochila Nike Brasilia Infantil</div>
    <div class="precos">
    <div class="preco-oferta">R$ 199,49</div>   
    <div class="preco-original">R$ 279,99</div>
    </div>
    <div class="desconto">29% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card">
    <img src="img/Produtos/Jaqueta Nike Sportswear Corinthians Infantil.avif" alt="Jaqueta-Nike-Sportswear-Corinthians-Infantil">
    <div class="descricao">Jaqueta Nike Sport Corinthians Infantil</div>
    <div class="precos">
    <div class="preco-oferta">R$ 332,49</div>   
    <div class="preco-original">R$ 349,99</div>
    </div>
    <div class="desconto">5% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>
</div>
</div>
</div>


<div class="container-all">
  </div>
  <div class="icones-nike">ÍCONES PARA OS MAIS NOVOS</div>
  <div class="icones-nike-carousel" style="overflow-x: hidden;">
    <div class="icones-nike-img">
    <a href="#pegasus">
      <img src="img/Ícones para os mais novos/Ícones para os mais novos Pegasus.jpg" alt="Pegasus">
    </a>
    <a href="#dunk">
      <img src="img/Ícones para os mais novos/Ícones para os mais novos Dunk.jpg" alt="dunk">
    </a>
    <a href="#air-max-plus">
      <img src="img/Ícones para os mais novos/Ícones para os mais novos Air Max Plus.jpg" alt="Air-Max-Plus">
    </a>
    <a href="#air-force-1">
      <img src="img/Ícones para os mais novos/Ícones para os mais novos Air Force 1.jpg" alt="Air-Force-1">
    </a>
    <a href="#air-jordan-1">
      <img src="img/Ícones para os mais novos/Ícones para os mais novos Air Jordan 1.jpg" alt="Air-Jordan-1">
    </a> 
    <a href="#air-max-270">
      <img src="img/Ícones para os mais novos/Ícones para os mais novos Air Max 270.jpg" alt="Air-Max-270">
    </a>
    <a href="#revolution">
      <img src="img/Ícones para os mais novos/Ícones para os mais novos Revolution.jpg" alt="Revolution">
    </a>
    <a href="#air-max-dn">
      <img src="img/Ícones para os mais novos/Ícones para os mais novos Air Max Dn.jpg" alt="Air-Max-Dn">
    </a>
    </div>
  </div>
</div>

<div class="Kids-National-Team">
    <img src="img/Kids National Team 2024.jpg" alt="Kids-National-Team">
</div>

<div class="banner">
  <div class="small-text">Nike Football</div>
  <div class="large-text">
      COLEÇÃO KIDS<br>NATIONAL TEAM<br> 2024
  </div>
  <div class="small-text">
  Brilhe com alegria em cada descoberta.  
</div>
</div>

<div class="coleção-infantil" id="coleção-infantil">
  <p>COLEÇÃO KIDS NATIONAL TEAM </p>   
</div>

<div class="container-all">
  <div class="container-arrows">
    <button class="prev-button">&lt;</button>
    <button class="next-button">&gt;</button>
  </div>
<div class="container-cards-carousel" style="overflow-x: hidden;">
 <div class="container-cards">
  <div class="card">
    <img src="img/Produtos/Camisa Nike Brasil I 2024-25 Torcedor Pro Infantil.avif" alt="Camisa-Nike-Brasil-I-2024/25-Torcedor-Infantil">
    <div class="descricao">Camisa Nike Brasil I 2024/25 Torcedor Infantil</div>
    <div class="precos">
    <div class="preco-oferta">R$ 284,99</div>   
    <div class="preco-original">R$ 299,99</div>
    </div>
    <div class="desconto">5% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card">
    <img src="img/Produtos/Camisa Nike Brasil II 2024-25 Torcedor Pro Infantil.avif" alt="Camisa-Nike-Brasil-II-2024/25-Torcedor-Infantil">
    <div class="descricao">Camisa Nike Brasil II 2024/25 Torcedor Infantil</div>
    <div class="precos">
    <div class="preco-oferta">R$ 284,99</div>   
    <div class="preco-original">R$ 299,99</div>
    </div>
    <div class="desconto">5% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card">
    <img src="img/Produtos/Camisa Nike Inglaterra I 2024-25 Torcedor Pro Infantil.png" alt="Camisa-Nike-Inglaterra-I-2024/25-Torcedor-Infantil">
    <div class="descricao">Camisa Nike Inglaterra I 2024/25 Torcedor Infantil</div>
    <div class="precos">
    <div class="preco-oferta">R$ 237,99</div>   
    <div class="preco-original">R$ 279,99</div>
    </div>
    <div class="desconto">15% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card">
    <img src="img/Produtos/Camisa Nike França I 2024-25 Torcedor Pro Infantil.png" alt="Camisa-Nike-França-I-2024/25-Torcedor-Infantil">
    <div class="descricao"> Camisa Nike França I 2024/25 Torcedor Infantil</div>
    <div class="precos">
    <div class="preco-oferta">R$ 251,99</div>   
    <div class="preco-original">R$ 279,99</div>
    </div>
    <div class="desconto">10% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card">
    <img src="img/Produtos/Camisa Nike Noruega I 2024-25 Torcedor Pro Infantil.png" alt="Camisa-Nike-Noruega-I-2024/25-Torcedor-Infantil">
    <div class="descricao">Camisa Nike Noruega I 2024/25 Torcedor Infantil</div>
    <div class="precos">
    <div class="preco-oferta">R$ 223,99</div>   
    <div class="preco-original">R$ 279,99</div>
    </div>
    <div class="desconto">20% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card">
    <img src="img/Produtos/Camisa Nike Portugal I 2024-25 Torcedor Pro Infantil.png" alt="Camisa-Nike-Portugal-I-2024/25-Torcedor-Infantil">
    <div class="descricao"> Camisa Nike Portugal I 2024/25 Torcedor Infantil</div>
    <div class="precos">
    <div class="preco-oferta">R$ 251,99</div>   
    <div class="preco-original">R$ 279,99</div>
    </div>
    <div class="desconto">10% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>


  <div class="card">
    <img src="img/Produtos/Camisa Nike Holanda I 2024-25 Torcedor Pro Infantil.png" alt="Camisa-Nike-Holanda-I-2024/25-Torcedor-Infantil">
    <div class="descricao">Camisa Nike Holanda I 2024/25 Torcedor Infantil</div>
    <div class="precos">
    <div class="preco-oferta">R$ 237,99</div>   
    <div class="preco-original">R$ 279,99</div>
    </div>
    <div class="desconto">15% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card">
    <img src="img/Produtos/Camisa Nike Turquia I 2024-25 Torcedor Pro Infantil.png" alt="Camisa-Nike-Turquia-I-2024/25-Torcedor-Infantil">
    <div class="descricao">Camisa Nike Turquia I 2024/25 Torcedor Infantil</div>
    <div class="precos">
    <div class="preco-oferta">R$ 209,99</div>   
    <div class="preco-original">R$ 279,99</div>
    </div>
    <div class="desconto">25% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>
</div>
</div>
</div>

<div class="Banner-Crianças">
      <img class="Banner-Crianças" src="img/Banner Crianças.jpg" alt="Banner-Crianças">
    </div>

    <div class="banner">
  <div class="small-text">Moda infantil que une design inovador e conforto incomparável.</div>
  <div class="large-text">
  Estilo e Conforto Para os Pequenos
  </div>
  <div class="small-text">
  Conforto e estilo que acompanham cada passo.
  </div>
</div>

<div class="coleção-infantil" id="coleção-infantil">
  <p>ÍCONES KIDS </p>   
</div>


<div class="container-all">
  <div class="container-arrows">
    <button class="prev-button">&lt;</button>
    <button class="next-button">&gt;</button>
  </div>
<div class="container-cards-carousel" style="overflow-x: hidden;">
 <div class="container-cards">
  <div class="card" id="pegasus">
    <img src="img/Produtos/Tênis Nike Air Zoom Pegasus 40 Infantil.avif" alt="Tênis-Nike-Air-Zoom-Pegasus-40-Infantil">
    <div class="descricao">Tênis Nike Pegasus Infantil</div>
    <div class="precos">
    <div class="preco-oferta">R$ 550,99</div>   
    <div class="preco-original">R$ 799,99</div>
    </div>
    <div class="desconto">31% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card" id="dunk">
    <img src="img/Produtos/Tênis Nike Dunk Low Infantil.avif" alt="Tênis-Nike-Dunk-Low-Infantil">
    <div class="descricao">Tênis Nike Dunk Low Infantil</div>
    <div class="precos">
    <div class="preco-oferta">R$ 664,99</div>   
    <div class="preco-original">R$ 699,99</div>
    </div>
    <div class="desconto">5% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card" id="air-max-plus">
    <img src="img/Produtos/Nike Air Max Plus Infantil.png" alt="Nike-Air-Max-Plus-Infantil">
    <div class="descricao">Nike Air Max Plus Infantil</div>
    <div class="precos">
    <div class="preco-oferta">R$ 749,99</div>   
    <div class="preco-original">R$ 999,99</div>
    </div>
    <div class="desconto">25% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card" id="air-force-1">
    <img src="img/Produtos/Tênis Nike Air Force 1 Infantil icone.avif" alt="Tênis-Nike-Air-Force-1-Infantil">
    <div class="descricao"> Tênis Nike Air Force 1 Infantil</div>
    <div class="precos">
    <div class="preco-oferta">R$ 629,99</div>   
    <div class="preco-original">R$ 699,99</div>
    </div>
    <div class="desconto">10% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card" id="air-jordan-1">
    <img src="img/Produtos/Tênis Air Jordan 1 Mid Infantil.avif" alt="Tênis-Air-Jordan-1-Mid-Infantil">
    <div class="descricao">Tênis Air Jordan 1 Mid Infantil</div>
    <div class="precos">
    <div class="preco-oferta">R$ 892,99</div>   
    <div class="preco-original">R$ 1199,99</div>
    </div>
    <div class="desconto">26% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card" id="air-max-270">
    <img src="img/Produtos/Nike Air Max 270 Infantil.png" alt="Nike-Air-Max-270-Infantil">
    <div class="descricao"> Nike Air Max 270 Infantil</div>
    <div class="precos">
    <div class="preco-oferta">R$ 424,99</div>   
    <div class="preco-original">R$ 499,99</div>
    </div>
    <div class="desconto">15% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>


  <div class="card" id="revolution">
    <img src="img/Produtos/Tênis Nike Revolution 7 Infantil.avif" alt="Tênis-Nike-Revolution-7-Infantil">
    <div class="descricao">Tênis Nike Revolution 7 Infantil</div>
    <div class="precos">
    <div class="preco-oferta">R$ 379,99</div>   
    <div class="preco-original">R$ 399,99</div>
    </div>
    <div class="desconto">5% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>

  <div class="card" id="air-max-dn">
    <img src="img/Produtos/Tênis Nike Air Max Dn Infantil.avif" alt="Tênis-Nike-Air-Max-Dn-Infantil">
    <div class="descricao">Tênis Nike Air Max Dn Infantil</div>
    <div class="precos">
    <div class="preco-oferta">R$ 719,99</div>   
    <div class="preco-original">R$ 899,99</div>
    </div>
    <div class="desconto">20% off</div>
    <button class="botao-comprar">Comprar</button>
  </div>
</div>
</div>
</div>

 </div>
</div>

<div class="footer-container">
    <div class="Footer-imagem">
        <img src="img/Footer imagem Infantil.jpg" alt="Junte-se">
        <div class="Footer-banner">
            <div class="Footer-small-text">Faça parte da comunidade Nike e leve seu desempenho para o próximo nível.</div>
            <div class="Footer-large-text">
                Faça Parte do Time
            </div>
            <div class="Footer-small-text">
                Cadastre-se agora e seja o primeiro a receber as últimas novidades,<br> lançamentos exclusivos e ofertas especiais.
            </div>
            <div class="Footer-Infantil-button">
                <a href="pag_cadastro.php">
                <button type="button">Cadastrar-se</button>
                </a>
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

<script src="js/Infantil.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>

</body>
</html>    