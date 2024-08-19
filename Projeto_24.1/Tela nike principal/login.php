<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/Nike Logo.png" type="image/x-icon">
    <title>Nike - Login</title>
    <link rel="stylesheet" href="../style-login/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand logo-clara-nav" id="logo" href="Principal.php"><img src="img/Nike logo.png" alt="Logo Nike"></a>
        <a class="navbar-brand logo-escura-nav" id="logo-escura" href="Principal.php"><img src="img/Nike logo escuro.png" alt="Logo Nike"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Principal.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Lancamento.php">Lançamentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Masculino.php">Masculino</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Feminino.php">Feminino</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Infantil.php">Infantil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Sobre-nós.php">Sobre nós</a>
                </li>
            </ul>

            <input type="checkbox" class="theme-checkbox">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item current-page">
                    <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="pag_cadastro.php">Cadastre-se</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="wrapper">
    <div class="form-container">
        <form name="loginform" action="validar_login.php" method="post" onsubmit="return validarLogin();" class="container">
            <h1 class="login-title">Login</h1>
            <button type="button" onclick="redirecionarCadastro()" class="cadastro-btn">Cadastre-se</button>
            <input type="text" name="login" id="login" minlength="6" maxlength="6" required placeholder="Login"><br><br>
            <input type="password" name="senha" id="senha" maxlength="8" minlength="8" required placeholder="Senha"><br><br>
            <p><a href="redefinir_senha.php" class="esqueceu-senha-link">Esqueceu sua Senha? Redefinir Senha</a></p>
            <button type="reset" class="reset-btn">Limpar</button>
            <input type="submit" value="Entrar" class="submit-btn">
        </form>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="left-footer">
                    <ul class="list-unstyled">
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
                        <li><a href="https://www.facebook.com/nike/?locale=pt_BR" target="_blank"><i class="fab fa-facebook fa-3x"></i></a></li>
                        <li><a href="https://www.instagram.com/nike/" target="_blank"><i class="fab fa-instagram fa-3x"></i></a></li>
                        <li><a href="https://www.youtube.com/user/NIKE" target="_blank"><i class="fab fa-youtube fa-3x"></i></a></li>
                    </ul>
                </div>
                <h5>Formas de pagamento</h5>
                <div class="payment-icons">
                    <img src="img/Banks/mastercard.png" alt="Mastercard">
                    <img src="img/Banks/Visa.webp" alt="visa">
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

<script src="../script-login/js_login.js"></script>
</body>
</html>
