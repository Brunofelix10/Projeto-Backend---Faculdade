<?php
session_start();
include ("conexao_bd.php");
?>
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
    <link rel="stylesheet" href="css/pag_log.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Nike - Tela de Log</title>
</head>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("tipo_filtro").addEventListener("change", function(){
            var tipo_filtro = this.value;
            if (tipo_filtro === "nome" || tipo_filtro === "cpf") {
                document.getElementById("filtro").style.display = "block";
            } else {
                document.getElementById("filtro").style.display = "none";
            }
        });
    });
</script>
<body>
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
                    <span class="nav-link">Bem-vindo! <?php echo htmlspecialchars($loggedInUser); ?></span>
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

      <div class="wrapper">
    <div class="form-container">
        <form action="" method="post" name="form">
            <h2 class="title">Buscar por:</h2>
            <label for="tipo_filtro" class="label-select">Tipo de Filtro:</label>
            <select name="tipo_filtro" id="tipo_filtro" class="custom-select" required>
                <option value="">Selecionar</option>
                <option value="nome">Nome</option>
                <option value="cpf">Cpf</option>
                <option value="todos">Todos</option>
            </select>
            <input type="text" name="filtro" id="filtro" class="hidden-input" placeholder="Insira o nome ou cpf">
            <button type="submit" class="submit-button">Pesquisar</button>
            
        </form>
    </div>
</div>

<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $tipo_filtro = $_POST['tipo_filtro'];
    $filtro = $_POST['filtro'] ?? '';

    if ($tipo_filtro == "nome" && empty($filtro)) {
        ?>
        <div class="error-message">
            <p>Insira um Nome</p>
        </div>
        <?php
        return false;
    }

    $sql_select = '';
    if ($tipo_filtro == "nome") {
        $sql_select = "SELECT * FROM tb_log WHERE nome = ? ORDER BY diaLogin DESC";
        $resultado = $conexao->prepare($sql_select);
        if ($resultado) {
            $resultado->bind_param("s", $filtro);
            $resultado->execute();
            $sql_query = $resultado->get_result();
            if ($sql_query->num_rows > 0) {
                while ($usuario = $sql_query->fetch_assoc()) {
                    ?>
                    <div class="resultado">
                        <p><strong>Nome:</strong> <?php echo htmlspecialchars($usuario['nome']); ?></p>
                        <p><strong>Dia:</strong> <?php echo htmlspecialchars($usuario['diaLogin']); ?></p>
                        <p><strong>Hora:</strong> <?php echo htmlspecialchars($usuario['hora']); ?></p>
                        <p><strong>Fator de Autenticação:</strong> <?php echo htmlspecialchars($usuario['fatorDeAutenticacao']); ?></p>
                    </div>
                    <?php
                }
            } else {
                ?>
                <div class="error-message">
                    <p>Nenhum usuário com esse nome ou CPF.</p>
                </div>
                <?php
                return false;
            }
        } else {
            ?>
            <div class="error-message">
                <p>Erro na preparação da consulta: <?php echo $conexao->error; ?></p>
            </div>
            <?php
        }
    }else if($tipo_filtro == "cpf"){
        $sql_select = "SELECT * FROM tb_log WHERE cpf = ? ORDER BY diaLogin DESC";
        $resultado = $conexao->prepare($sql_select);
        if ($resultado) {
            $resultado->bind_param("s", $filtro);
            $resultado->execute();
            $sql_query = $resultado->get_result();
            if ($sql_query->num_rows > 0) {
                while ($usuario = $sql_query->fetch_assoc()) {
                    ?>
                    <div class="resultado">
                        <p><strong>Nome:</strong> <?php echo htmlspecialchars($usuario['nome']); ?></p>
                        <p><strong>Dia:</strong> <?php echo htmlspecialchars($usuario['diaLogin']); ?></p>
                        <p><strong>Hora:</strong> <?php echo htmlspecialchars($usuario['hora']); ?></p>
                        <p><strong>Fator de Autenticação:</strong> <?php echo htmlspecialchars($usuario['fatorDeAutenticacao']); ?></p>
                    </div>
                    <?php
                }
            } else {
                ?>
                <div class="error-message">
                    <p>Nenhum usuário com esse nome ou CPF.</p>
                </div>
                <?php
                return false;
            }
        } else {
            ?>
            <div class="error-message">
                <p>Erro na preparação da consulta: <?php echo $conexao->error; ?></p>
            </div>
            <?php
        }
        }else if ($tipo_filtro == "todos"){
            $sql_select = "SELECT * FROM tb_log ORDER BY diaLogin DESC";
            $resultado = $conexao->prepare($sql_select);
            if ($resultado) {
                $resultado->execute();
                $sql_query = $resultado->get_result();
                if ($sql_query->num_rows > 0) {
                    while ($usuario = $sql_query->fetch_assoc()) {
                        ?>
                        <div class="resultado">
                            <p><strong>Nome:</strong> <?php echo htmlspecialchars($usuario['nome']); ?></p>
                            <p><strong>Dia:</strong> <?php echo htmlspecialchars($usuario['diaLogin']); ?></p>
                            <p><strong>Hora:</strong> <?php echo htmlspecialchars($usuario['hora']); ?></p>
                            <p><strong>Fator de Autenticação:</strong> <?php echo htmlspecialchars($usuario['fatorDeAutenticacao']); ?></p>
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <div class="error-message">
                        <p>Nenhum usuário com esse nome ou CPF.</p>
                    </div>
                    <?php
                    return false;
                }
            } else {
                ?>
                <div class="error-message">
                    <p>Erro na preparação da consulta: <?php echo $conexao->error; ?></p>
                </div>
                <?php
            }
        }
}
?>

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


<script src="js/fonte.js"></script>

<script src="script-rSenha/script.js"></script>
<script src="js/Principal.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
</body>
</html>