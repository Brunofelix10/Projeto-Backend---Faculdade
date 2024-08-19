<?php
session_start();

function checkLogin() {
    if (isset($_SESSION['login'])) {
        return $_SESSION['login'];
    }
    return null;
}

function logout() {
    session_destroy();
    header("Location: login.php");
    exit();
}

// Se o botão de sair for clicado, deslogue o usuário
if (isset($_GET['logout'])) {
    logout();
}
?>
