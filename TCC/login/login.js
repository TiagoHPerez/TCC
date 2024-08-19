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


// Função para voltar à página anterior
function voltar(){
  window.location.href = '../index.php';
}

// Controle do título da página
let docTitile = document.title;
window.addEventListener("blur", () =>{
    document.title = "Termine de Logar! 😠";
})
window.addEventListener("focus", () =>{
    document.title = docTitile;
})
