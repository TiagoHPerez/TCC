// Controle de visibilidade de senha
let btn = document.querySelector('.fa-eye');

btn.addEventListener('click', ()=>{
  let inputSenha = document.querySelector('#senha');
  
  if(inputSenha.getAttribute('type') == 'password'){
    inputSenha.setAttribute('type', 'text');
  } else {
    inputSenha.setAttribute('type', 'password');
  }
});

// Função para realizar o login
function entrar(){
  let usuario = document.querySelector('#usuario');
  let userLabel = document.querySelector('#userLabel');
  
  let senha = document.querySelector('#senha');
  let senhaLabel = document.querySelector('#senhaLabel');
  
  let msgError = document.querySelector('#msgError');
  let listaUser = [];
  
  let userValid = {
    nome: '',
    user: '',
    senha: ''
  };
  
  listaUser = JSON.parse(localStorage.getItem('listaUser'));
  
  if(usuario.value.trim() === '' || senha.value.trim() === '') {
    msgError.setAttribute('style', 'display: block');
    msgError.innerHTML = 'Por favor, preencha todos os campos.';
    return; // Retorna para evitar que o restante da função seja executado
  }
  
  listaUser.forEach((item) => {
    if(usuario.value == item.userCad && senha.value == item.senhaCad){
       
      userValid = {
         nome: item.nomeCad,
         user: item.userCad,
         senha: item.senhaCad
       };
      
    }
  });
   
  if(usuario.value == userValid.user && senha.value == userValid.senha){
    window.location.href = '../index2.html';
    
    let mathRandom = Math.random().toString(16).substr(2);
    let token = mathRandom + mathRandom;
    
    localStorage.setItem('token', token);
    localStorage.setItem('userLogado', JSON.stringify(userValid));
  } else {
    userLabel.setAttribute('style', 'color: red');
    usuario.setAttribute('style', 'border-color: red');
    senhaLabel.setAttribute('style', 'color: red');
    senha.setAttribute('style', 'border-color: red');
    msgError.setAttribute('style', 'display: block');
    msgError.innerHTML = 'Usuário ou senha incorretos';
    usuario.focus();
  }
}

// Função para voltar à página anterior
function voltar(){
  window.location.href = '../index.html';
}

// Controle do título da página
let docTitile = document.title;
window.addEventListener("blur", () =>{
    document.title = "Termine de Logar! 😠";
})
window.addEventListener("focus", () =>{
    document.title = docTitile;
})
