<?php
session_start();

// Função para gerar uma pergunta aleatória
function gerarPergunta() {
    $perguntas = [
        'nome_materno' => 'Qual o nome Materno?',
        'data_nascimento' => 'Qual a data de nascimento?',
        'cep' => 'Qual o CEP do seu endereço?'
    ];
    $chaves = array_keys($perguntas);
    $chave_aleatoria = $chaves[array_rand($chaves)];
    return ['chave' => $chave_aleatoria, 'pergunta' => $perguntas[$chave_aleatoria]];
}

// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "db_projeto";

$conexao = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
}

// Função para registrar no log
function registrarLog($conexao, $login, $pergunta) {
    $cpf_usuario = '';
    $stmt_cpf = $conexao->prepare("SELECT cpf FROM tb_usuario WHERE login=?");
    $stmt_cpf->bind_param("s", $login);
    $stmt_cpf->execute();
    $resultado_nome = $stmt_cpf->get_result();
    if ($resultado_nome->num_rows == 1) {
        $row_cpf = $resultado_nome->fetch_assoc();
        $cpf_usuario = $row_cpf['cpf'];
    }
    $stmt_cpf->close();

    $nome_usuario = '';
    // Obtém o nome do usuário
    $stmt_nome = $conexao->prepare("SELECT nome FROM tb_usuario WHERE login=?");
    $stmt_nome->bind_param("s", $login);
    $stmt_nome->execute();
    $resultado_nome = $stmt_nome->get_result();
    if ($resultado_nome->num_rows == 1) {
        $row_nome = $resultado_nome->fetch_assoc();
        $nome_usuario = $row_nome['nome'];
    }
    $stmt_nome->close();

    $data = date("Y-m-d");
    $hora = date("H:i:s");
    $stmt_log = $conexao->prepare("INSERT INTO tb_log (nome, cpf, diaLogin, hora, fatorDeAutenticacao) VALUES (?, ?, ?, ?, ?)");
    $stmt_log->bind_param("sssss", $nome_usuario, $cpf_usuario, $data, $hora, $pergunta);
    $stmt_log->execute();
    $stmt_log->close();
}

// Função para converter data do formato brasileiro para o formato do banco de dados
function converterDataParaBanco($data) {
    $partes = explode('/', $data);
    if (count($partes) == 3) {
        return $partes[2] . '-' . $partes[1] . '-' . $partes[0];
    }
    return false;
}

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (!isset($_SESSION['tentativas'])) {
        $_SESSION['tentativas'] = 3; // Inicializa com 3 tentativas
    }

    $resposta_usuario = $_POST['resposta'];
    $pergunta_chave = $_POST['pergunta_chave'];

    $perguntas = [
        'nome_materno' => 'Qual o nome Materno?',
        'data_nascimento' => 'Qual a data de nascimento?',
        'cep' => 'Qual o CEP do seu endereço?'
    ];
    
    if (array_key_exists($pergunta_chave, $perguntas)) {
        $login = $_SESSION['login'];
        $coluna = $pergunta_chave;
        $stmt = $conexao->prepare("SELECT $coluna FROM tb_usuario WHERE login=?");
        $stmt->bind_param("s", $login);
        $stmt->execute();
        $resultado = $stmt->get_result();
        
        if ($resultado->num_rows == 1) {
            $row = $resultado->fetch_assoc();
            $resposta_correta = $row[$coluna];

            // Comparação de datas
            if ($pergunta_chave === 'data_nascimento') {
                $resposta_usuario = converterDataParaBanco($resposta_usuario);
                if ($resposta_usuario === false) {
                    echo "Formato de data inválido.";
                    exit();
                }
            }

            // Depuração: Mostra as datas convertidas
            echo "Resposta do usuário (convertida): " . $resposta_usuario . "<br>";
            echo "Resposta correta (BD): " . $resposta_correta . "<br>";

            if ($resposta_usuario === $resposta_correta) {
                echo "Resposta correta! Acesso permitido.";
                unset($_SESSION['tentativas']);
                unset($_SESSION['2fa']);
                registrarLog($conexao, $login, $pergunta_chave);
                header("Location: Principal.php");
                exit();
            } else {
                $_SESSION['tentativas']--;
                if ($_SESSION['tentativas'] <= 0) {
                    unset($_SESSION['tentativas']);
                    $_SESSION['erro_login'] = true; // Define o erro de login
                    header("Location: login.php");
                    exit();
                }
                echo "Resposta incorreta. Tente novamente.";
            }
        } else {
            echo "Erro ao verificar a resposta.";
        }

        $stmt->close();
    } else {
        echo "Pergunta inválida.";
    }
    $conexao->close();
} else {
    if (!isset($_SESSION['tentativas'])) {
        $_SESSION['tentativas'] = 3; // Inicializa com 3 tentativas
    }

    // Limpa a sessão de erro ao carregar a página de login
    $_SESSION['erro_login'] = false;

    $pergunta = gerarPergunta();
    $_SESSION['pergunta'] = $pergunta['pergunta'];
    $_SESSION['pergunta_chave'] = $pergunta['chave'];
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon/Logo Nike.png" type="image/x-icon">
    <link rel="shortcut icon" href="img/Nike Logo.png" type="image/x-icon">
    <title>Nike - Login 2FA</title>
    <link rel="stylesheet" href="style-2fa/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand logo-clara-nav" id="logo" href="#"><img src="img/Nike logo.png" alt="Logo Nike"></a>
            <a class="navbar-brand logo-escura-nav" id="logo-escura" href="#"><img src="img/Nike logo escuro.png" alt="Logo Nike"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Lançamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Masculino</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Feminino</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Infantil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Sobre-nós</a>
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
            <form id="loginForm" action="2fa.php" method="post">
                <h2>Formulário de Autenticação 2FA</h2>
                <div id="perguntaContainer">
                    <p><?php echo $_SESSION['pergunta']; ?></p>
                </div>
                <input type="hidden" name="pergunta_chave" value="<?php echo $_SESSION['pergunta_chave']; ?>">
                <input type="text" name="resposta" id="resposta" placeholder="Resposta" required>
                <input type="submit" value="Enviar">
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

    <script src="script-login/js_login.js"></script>
</body>
</html>
