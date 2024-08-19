function validarLogin() {
    var login = document.forms['loginform']['login'].value;
    var senha = document.forms['loginform']['senha'].value;
    if(login === "" || senha === ""){
        alert("Preencha todos os campos.");
        return false;
    }
    return true;
}


function redirecionarCadastro() {
    window.location.href = 'pag_cadastro.php';
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

const questions = [
    "Qual o nome da sua mãe?",
    "Qual é o seu CPF?",
    "Qual é o seu CEP?"
];

const correctAnswers = {
    "Qual o nome da sua mãe?": "resposta1",
    "Qual é o seu CPF?": "resposta2",
    "Qual é o seu CEP?": "resposta3"
};

document.getElementById('loginform').onsubmit = function(e) {
    e.preventDefault(); // Prevent form submission to server

    // Show 2FA dialog
    document.getElementById('overlay').style.display = 'block';
    document.getElementById('ibox').style.display = 'block';

    // Select a random question
    const questionIndex = Math.floor(Math.random() * questions.length);
    document.getElementById('question').innerText = questions[questionIndex];
};

function validate2FA() {
    const question = document.getElementById('question').innerText;
    const answer = document.getElementById('answer').value;

    if (answer === correctAnswers[question]) {
        // Submit the form to the server
        document.getElementById('loginform').submit();
    } else {
        alert('Resposta incorreta. Tente novamente.');
    }
}


