<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'conexao_bd.php'; 

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if (!empty($login) && !empty($senha)) {
        $stmt = $conexao->prepare("SELECT login, tipo_usuario FROM tb_usuario WHERE login = ? AND senha = ?");
        $stmt->bind_param("ss", $login, $senha);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows == 1) {
            $row = $resultado->fetch_assoc();
            $_SESSION['login'] = $login;
            $_SESSION['tipo_usuario'] = $row['tipo_usuario']; 

            header("Location: 2fa.php");
            exit;
        } else {
            echo "Login ou senha incorretos.";
        }

        $stmt->close();
    } else {
        echo "Login ou senha vazios";
        return false;
    }

    $conexao->close(); 
}
?>