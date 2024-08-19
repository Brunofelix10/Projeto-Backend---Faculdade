<?php 
    if($_SERVER['REQUEST_METHOD']=="POST"){
        include "conexao_bd.php";
        $nome = $_POST['nome'];
        $data_nascimento = $_POST['data_nascimento'];
        $genero = $_POST['genero'];
        $nome_materno = $_POST['nome_materno'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $tel_celular = $_POST['tel_celular'];
        $tel_fixo = $_POST['tel_fixo'];
        $cep = $_POST['cep'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $numero_casa = $_POST['numero_casa'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $confirmar_senha = $_POST['confirmar_senha'];

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        try{
            if (!empty($nome) && !empty($data_nascimento) && !empty($genero) && !empty($nome_materno) && !empty($cpf) && !empty($email) && !empty($tel_celular) && !empty($tel_fixo) && !empty($cep) && !empty($estado) && !empty($cidade) && !empty($bairro) && !empty($rua) && !empty($login) && !empty($senha) && !empty($confirmar_senha)) {
                
                if ($confirmar_senha != $senha) {
                    echo "As senhas não conferem!";
                    return false;
                }
        
                if ($genero == "Genero") {
                    echo "Selecione o genero!";
                    return false;
                }
        
                // Inserir os dados no banco de dados
                $sql_insert = "INSERT INTO tb_usuario(nome, data_nascimento, genero, nome_materno, cpf, email, telefoneCelular, telefoneFixo, cep, estado, cidade, bairro, rua, numeroCasa, login, senha) VALUES ('$nome','$data_nascimento','$genero','$nome_materno','$cpf','$email','$tel_celular','$tel_fixo','$cep','$estado','$cidade','$bairro','$rua','$numero_casa','$login','$senha')";

                $insercao = $conexao->query($sql_insert);
                if($insercao == true){
                    header("Location: login.php");
                }

        
            } else {
                echo "Preencha todos os campos corretamente!";
                return false;
            }
            
        }catch(mysqli_sql_exception $e){
            if($e->getCode()==1062){
                echo"Usuario já registrado";
                return false;
            }else{
                echo "Erro: " . $e->getMessage();
            }
        }
        
        
        
    }
?>