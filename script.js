const form = document.getElementById("form-imovel");
const username = document.getElementById("username");
const email = document.getElementById("email");
const tipo = document.getElementById("tipo");
const tipoImovel = document.getElementById("tipoImovel");
const valor = document.getElementById("valor");


//addEventListenerev = permite executar uma ou mais funções quando um evento acontrece
/* form = elemento ao qual se deseja adcionar seu manipulador de eventos, ou seja um elemento DOM.
submit = uma string qye irá especificar o nome do evento que será detectado (e) quando queremos ter mias informções sobre o evento como por exemplo, qual elemento foi clicado. Temos quer passar um parametro que nesse caso é o (e) que representa um objeto que irá conter várias informações sobre o evento como o id*/

form.addEventListener("submit", (e) => {
    e.preventDefault();

    checkInputs();
});



//hoisting
    function checkInputs() {
    const usernameValue = username.value;
    const emailValue = email.value;
    const tipo = tipo.value;
    const tipoImovelValue = tipoImovel.value;
    const valorlValue = valor.value;


if (usernameValue === "") {

    setErrorFor(username, "O nome de usuário é obrigatório.");
} else {
    setSuccesFor(username);
}

if (emailValue === "") {
    setErrorFor(email, "O email é obrigatório.");
    // O ! nega a condição especificada
} else if (!checkEmail(emailValue)) {
    setErrorFor(email, "Por favor, insira uma email válido");
} else {
    setSuccesFor(email);
}

if (tipoValue === "") {

    setErrorFor(tipo, "O tipo é obrigatório.");
} else {
    setSuccesFor(tipo);
}

if (tipoImovelValue === "") {

    setErrorFor(tipoImovel, "O tipo de imovel é obrigatório.");
} else {
    setSuccesFor(tipoImovel);
}

if (valorlValue === "") {

    setErrorFor(valor, "O valor do imovel é obrigatório.");
} else {
    setSuccesFor(valor);
}

}

function setSuccessFor(input) {
    //parentElement = seleciona o pai direto do elemento especificado
    const formControl = input.parentElement;
    formControl.className = "form-control success";
}

function setErrorFor(input, message) {
    //retorna a div que é o pai do input
    const formControl = input.parentElement;
    //querySelector = retorna apenas o primeiro elemento especificado dentro do elemento pai
    const small = formControl.querySelector("small");

    //Adiciona a mensagem de erro
    small.innerText = message;

    //Adiciona a classe de erro
formControl.className = "form-control error";
}



function checkEmail(email) {  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(    email  );}