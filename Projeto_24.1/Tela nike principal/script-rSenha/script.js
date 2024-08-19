function validarRedefinirSenha(){
    var senha = document.forms['redefinirform']['nova_senha'].value;
    var confirmarSenha = document.forms['redefinirform']['confirmar_senha'].value;
    if(senha !== confirmarSenha){
        alert("As senhas não conferem");
        return false
    }
}