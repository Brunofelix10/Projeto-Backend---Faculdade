function validarFormulario(){
    var nome = document.forms['formcadastro']['nome'].value;
    var data_nascimento = document.forms['formcadastro']['data_nascimento'].value;
    var sexo = document.forms['formcadastro']['genero'].value;
    var nome_mae = document.forms['formcadastro']['nome_mae'].value;
    var cpf = document.forms['formcadastro']['cpf'].value;
    var email = document.forms['formcadastro']['email'].value;
    var telefone_celular = document.forms['formcadastro']['telefone_celular'].value;
    var telefone_fixo = document.forms['formcadastro']['telefone_fixo'].value;
    var cep = document.forms['formcadastro']['cep'].value;
    var cidade = document.forms['formcadastro']['cidade'].value;
    var estado = document.forms['formcadastro']['estado'].value;
    var rua = document.form['formcadastro']['rua'].value;
    var numero_casa = document.forms['formcadastro']['numero_casa'].value;
    var login = document.forms['formcadastro']['login'].value;
    var senha = document.forms['formcadastro']['senha'].value;
    var confirmar_senha = document.forms['formcadastro']['cofirmar_senha'].value;

    if(confirmar_senha === ""){
        alert("Insira a confirmação de senha.");
        return false;
    }
    else if(senha !== confirmar_senha){
        alert("As senhas não conferem.");
        return false;
    }
    else if(senha.length > 8 || senha.length <8){
        alert("A senha deve ter 8 caracteres");
        return false;
    }

    else if(nome.length > 80 || nome.length <15){
        alert("Seu nome deve ter entre 15 e 80 caracteres.");
        return false;
    }
    else if(nome === ""){
        alert("Insira um nome.");
        return false;
    }

    else if(data_nascimento === ""){
        alert("Insira a data de nascimento.");
        return false;
    }

    else if(genero === "Outro"){
        alert("Selecione o sexo");
        return false;
    }
    
    else if(nome_mae === ""){
        alert("Insira o nome materno.");
        return false;
    }
    else if(nome_mae.length>80 || nome_mae.length <15){
        alert("O nome materno deve ter entre 15 e 80 caracteres.");
        return false;
    }

    else if(cpf === ""){
        alert("Insira seu cpf.");
        return false;
    }

    else if(email === ""){
        alert("Insira um email valido.");
        return false;
    }

    else if(telefone_celular === ""){
        alert("Insira um numero de celular valido.");
        return false;
    }

    else if(telefone_fixo === ""){
        alert("Insira um telefone fixo valido.");
        return false;
    }

    else if(cep === ""){
        alert("Insira um cep valido.");
        return false;
    }

    else if(cidade === ""){
        alert("Insira uma cidade.");
        return false; 

    }

    else if(estado === ""){
        alert("Insira um estado.");
        return false;
    }

    else if(rua === ""){
        alert("Insira o nome da rua.");
        return false;
    }

    else if(numero_casa === ""){
        alert("Insira o numero do apt ou casa.");
        return false;
    }

    else if(login === ""){
        if(login.length > 6 || login.length < 6){
            alert("O login deve ter exatamente 6 caracteres");
            return false;
        }
    }

    
}

document.addEventListener('DOMContentLoaded', (event) => {
    const checkbox = document.querySelector('.theme-checkbox');
    const body = document.body;

    const toggleDarkMode = () => {
        if (checkbox.checked) {
            body.classList.remove('light-mode');
            body.classList.add('dark-mode');
        } else {
            body.classList.remove('dark-mode');
            body.classList.add('light-mode');
        }
    };

    checkbox.addEventListener('change', toggleDarkMode);

    toggleDarkMode();
});
