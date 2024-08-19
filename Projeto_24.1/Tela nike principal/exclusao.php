<?php
include "conexao_bd.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];

    if (!empty($login)) {
        $sql = "DELETE FROM tb_usuario WHERE login = ?";
        if ($stmt = $conexao->prepare($sql)) {
            $stmt->bind_param("s", $login);
            if ($stmt->execute()) {
                echo "Usuário excluído com sucesso.";
                $stmt->close();
                $conexao->close();
                header("Location: pag_master.php");
                exit();
            } else {
                echo "Erro ao excluir usuário: " . $stmt->error;
            }
        } else {
            echo "Erro na preparação da consulta: " . $conexao->error;
        }
    } else {
        echo "Login inválido.";
    }
} else {
    echo "Método de solicitação inválido.";
}

$conexao->close();
?>
