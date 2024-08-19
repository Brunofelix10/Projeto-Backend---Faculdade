<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/Nike Logo.png" type="image/x-icon">
    <title>Nike - Cadastro</title>
    <script src="../script-cadastro/js_cadastro.js"></script>
    <script>
        function pesquisarCep(cep) {
            fetch(`https://viacep.com.br/ws/${cep}/json/`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('cidade').value = data.localidade;
                document.getElementById('estado').value = data.uf;
                document.getElementById('bairro').value = data.bairro;
                document.getElementById('rua').value = data.logradouro;
            })
            .catch(error => console.error('Ocorreu um erro ao pesquisar o CEP: ' + error));
        }

        function mascaraCPF(input) {
            var cpf = input.value;
            cpf = cpf.replace(/\D/g, ""); 
            if (cpf.length <= 11) {
                cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2"); 
                cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2"); 
                cpf = cpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2"); 
            }
            input.value = cpf;
        }

        function mascaraTelefone(input) {
            var telefone = input.value;
            telefone = telefone.replace(/\D/g, ""); 
            if (telefone.length <= 11) {
                telefone = telefone.replace(/(\d{2})(\d)/, "($1) $2"); 
                telefone = telefone.replace(/(\d{5})(\d)/, "$1-$2"); 
            }
            input.value = telefone;
        }
    </script>
    <link rel="stylesheet" href="../style-cadastro/style_cadastro.css">
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
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                </li>
                <li class="nav-item current-page">
                    <a class="nav-link active" aria-current="page" href="pag_cadastro.php">Cadastre-se</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="wrapper">
    <div class="form-container">
        <h1 class="cadastro-title">Cadastro</h1>
        <main class="container">
            <button class="login-btn" type="button" onclick="location.href='login.php'">Login</button>
            <form action="validar_cadastro.php" method="post" name="formcadastro" class="formcadastro" onsubmit="return validarCadastro()">
                <input type="text" name="nome" id="nome" required minlength="15" maxlength="80" placeholder="Nome Completo"><br><br>
                <input type="date" name="data_nascimento" id="data_nascimento" required><br><br>
                <select name="genero" id="genero" required>
                    <option value="">Gênero</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                </select><br><br>
                <input type="text" name="nome_materno" id="nome_materno" minlength="15" maxlength="80" required placeholder="Nome Materno"><br><br>
                <input type="text" name="cpf" id="cpf" required maxlength="14" placeholder="CPF" oninput="mascaraCPF(this)"><br><br>
                <input type="email" name="email" id="email" required placeholder="Email"><br><br>
                <input type="text" name="tel_celular" id="tel_celular" placeholder="Telefone Celular" required maxlength="15" oninput="mascaraTelefone(this)"><br><br>
                <input type="text" name="tel_fixo" id="tel_fixo" placeholder="Telefone Fixo" required maxlength="14" oninput="mascaraTelefone(this)"><br><br>
                <input type="number" name="cep" id="cep" required placeholder="CEP" onblur="pesquisarCep(this.value);"><br><br>
                <input type="text" name="estado" id="estado" required placeholder="Estado"><br><br>
                <input type="text" name="cidade" id="cidade" required placeholder="Cidade"><br><br>
                <input type="text" name="bairro" id="bairro" required placeholder="Bairro"><br><br>
                <input type="text" name="rua" id="rua" required placeholder="Rua"><br><br>
                <input type="number" name="numero_casa" id="numero_casa" placeholder="Número"><br><br>
                <input type="text" name="login" id="login" minlength="6" maxlength="6" required placeholder="Login"><br><br>
                <input type="password" name="senha" id="senha" minlength="8" maxlength="8" required placeholder="Senha"><br><br>
                <input type="password" name="confirmar_senha" id="confirmar_senha" minlength="8" maxlength="8" required placeholder="Confirme a senha"><br><br>
                <button class="reset-btn" type="reset">Limpar</button>
                <input type="submit" value="Cadastrar"><br><br>
            </form>
        </main>
    </div>
</div>

<footer class="footer">
    <div class="container-footer">
        <div class="row">
            <div class="col-md-3">
                <div class="left-footer">
                    <ul class="list-unstyled ">
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
                        <li class="#"><a href="https://www.instagram.com/nike/" target="_blank"><i class="fab fa-instagram fa-3x"></i></a></li>
                        <li class="#"><a href="https://www.youtube.com/user/NIKE" target="_blank"><i class="fab fa-youtube fa-3x"></i></a></li>
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
</body>
</html>
