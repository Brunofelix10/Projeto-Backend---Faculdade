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
    <link rel="stylesheet" href="css/Consulta.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Nike - Consulta</title>
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

      <script>
        function validarNome(){
            var nome = document.forms['form']['nome'].value;
            if(nome == ""){
                alert("Insira um nome!");
                return false;
            }
        }
    </script>
<div class="wrapper">
    <div class="form-container">
        <h1 class="nome">Pesquisar usuário</h1>
        <form name="form" id="form" method="post" onsubmit="return validarNome()">
            <label for="nome"></label>
            <input placeholder="Digite o Nome" type="text" name="nome" id="nome">
            <input type="submit" value="Pesquisar">
        </form>
    </div>
</div>

    <?php 
    //PESQUISAR USUARIO
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $nome = $_POST['nome'];
        if (strlen($nome) == 0) {
            echo "<div class='alert alert-warning'>Insira um nome válido</div>";
            return false;
        } else {
            $nome = "%" . $conexao->real_escape_string($nome) . "%";
            $sql_select = "SELECT * FROM tb_usuario WHERE nome LIKE ?";
            $resultado = $conexao->prepare($sql_select);
            if ($resultado) {
                $resultado->bind_param("s", $nome);
                $resultado->execute();
                $sql_query = $resultado->get_result();
                if ($sql_query->num_rows > 0) {
                    echo "<div class='user-results'>";
                    while ($usuario = $sql_query->fetch_assoc()) {
                        echo "<div class='user-card'>";
                        echo "<div class='user-info'>";
                        echo "<div class='user-info-column'>";
                        echo "<div class='user-info-item'><strong>Nome:</strong> " . htmlspecialchars($usuario['nome']) . "</div>";
                        echo "<div class='user-info-item'><strong>Data de Nascimento:</strong> " . htmlspecialchars($usuario['data_nascimento']) . "</div>";
                        echo "<div class='user-info-item'><strong>Nome Materno:</strong> " . htmlspecialchars($usuario['nome_materno']) . "</div>";
                        echo "<div class='user-info-item'><strong>Gênero:</strong> " . htmlspecialchars($usuario['genero']) . "</div>";
                        echo "<div class='user-info-item'><strong>CPF:</strong> " . htmlspecialchars($usuario['cpf']) . "</div>";
                        echo "<div class='user-info-item'><strong>Email:</strong> " . htmlspecialchars($usuario['email']) . "</div>";
                        echo "</div>";
                        echo "<div class='user-info-column'>";
                        echo "<div class='user-info-item'><strong>Telefone Celular:</strong> " . htmlspecialchars($usuario['telefoneCelular']) . "</div>";
                        echo "<div class='user-info-item'><strong>Telefone Fixo:</strong> " . htmlspecialchars($usuario['telefoneFixo']) . "</div>";
                        echo "<div class='user-info-item'><strong>CEP:</strong> " . htmlspecialchars($usuario['cep']) . "</div>";
                        echo "<div class='user-info-item'><strong>Estado:</strong> " . htmlspecialchars($usuario['estado']) . "</div>";
                        echo "<div class='user-info-item'><strong>Cidade:</strong> " . htmlspecialchars($usuario['cidade']) . "</div>";
                        echo "<div class='user-info-item'><strong>Bairro:</strong> " . htmlspecialchars($usuario['bairro']) . "</div>";
                        echo "<div class='user-info-item'><strong>Login:</strong> " . htmlspecialchars($usuario['login']) . "</div>";
                        echo "<div class='user-info-item'><strong>Senha:</strong> " . htmlspecialchars($usuario['senha']) . "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                    echo "</div>";
                } else {
                    echo "<div class='alert alert-info'>Nenhum usuário encontrado</div>";
                }
            }
        }
    }
    ?>

<div class="container mt-5">
        <div class="row">
            <div class="col">
                <h2 class="lista-usuarios">Usuários</h2>
                <?php mostrarUsuario($conexao); ?>
            </div>
        </div>
    </div>

    <?php
function mostrarUsuario($conexao){
    $sql = "SELECT nome, data_nascimento, genero, cpf, email, telefoneCelular, telefoneFixo, cep, estado, cidade, bairro, rua, numeroCasa, login, senha FROM tb_usuario";
    $resultado = $conexao->query($sql);
    if($resultado->num_rows > 0){
        echo "<div class='user-results'>";
        
        // Contador para controlar a exibição em colunas
        $col_count = 0;
        
        while($row = $resultado->fetch_assoc()){
            if ($col_count % 3 == 0) {
                // Abre uma nova linha a cada 3 usuários
                echo "<div class='user-row'>";
            }
            
            echo "<div class='user-card'>"; // Inicia o card do usuário
            
            // Informações do usuário em colunas
            echo "<div class='user-info'>";
            echo "<div class='user-info-column'>";
            echo "<div class='user-info-item'><strong>Nome:</strong> " . htmlspecialchars($row['nome']) . "</div>";
            echo "<div class='user-info-item'><strong>Data de Nascimento:</strong> " . htmlspecialchars($row['data_nascimento']) . "</div>";
            echo "<div class='user-info-item'><strong>Gênero:</strong> " . htmlspecialchars($row['genero']) . "</div>";
            echo "<div class='user-info-item'><strong>CPF:</strong> " . htmlspecialchars($row['cpf']) . "</div>";
            echo "<div class='user-info-item'><strong>Email:</strong> " . htmlspecialchars($row['email']) . "</div>";
            echo "</div>";
            echo "<div class='user-info-column'>";
            echo "<div class='user-info-item'><strong>Telefone Celular:</strong> " . htmlspecialchars($row['telefoneCelular']) . "</div>";
            echo "<div class='user-info-item'><strong>Telefone Fixo:</strong> " . htmlspecialchars($row['telefoneFixo']) . "</div>";
            echo "<div class='user-info-item'><strong>CEP:</strong> " . htmlspecialchars($row['cep']) . "</div>";
            echo "<div class='user-info-item'><strong>Estado:</strong> " . htmlspecialchars($row['estado']) . "</div>";
            echo "<div class='user-info-item'><strong>Cidade:</strong> " . htmlspecialchars($row['cidade']) . "</div>";
            echo "<div class='user-info-item'><strong>Bairro:</strong> " . htmlspecialchars($row['bairro']) . "</div>";
            echo "</div>";
            
            // Início de uma nova coluna para o login e senha
            echo "<div class='user-info-column'>";
            echo "<div class='user-info-item'><strong>Login:</strong> " . htmlspecialchars($row['login']) . "</div>";
            echo "<div class='user-info-item'><strong>Senha:</strong> " . htmlspecialchars($row['senha']) . "</div>";
            echo '<form method="POST" action="exclusao.php" onsubmit="return confirm(\'Tem certeza que deseja excluir este usuário?\');">';
            echo '<input type="hidden" name="login" value="' . htmlspecialchars($row['login']) . '">';
            echo '<button type="submit" class="delete-button">Excluir</button>';
            echo '</form>';
            echo "</div>"; // Fecha user-info-column

            echo "</div>"; // Fecha user-info
            echo "</div>"; // Fecha user-card
            
            $col_count++;
            
            if ($col_count % 3 == 0 || $col_count == $resultado->num_rows) {
                // Fecha a linha a cada 3 usuários ou no último usuário
                echo "</div>"; // Fecha user-row
            }
        }
        
        echo "</div>"; // Fecha user-results
        $resultado->free();
    } else {
        echo "Nenhum usuário encontrado.";
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

<script src="js/Infantil.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>

    
    <?php $conexao->close();?>

</body>
</html>