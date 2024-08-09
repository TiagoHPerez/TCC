// Seleciona os botões de visualização de senha
let btn = document.querySelector('#verSenha')
let btnConfirm = document.querySelector('#verConfirmSenha')

// Seleciona os campos de entrada de dados e elementos relacionados ao nome, usuário, senha e confirmação de senha
let nome = document.querySelector('#nome')
let labelNome = document.querySelector('#labelNome')
let validNome = false

let usuario = document.querySelector('#usuario')
let labelUsuario = document.querySelector('#labelUsuario')
let validUsuario = false

let email = document.querySelector('#email')
let labelemail = document.querySelector('#labelemail')
let validemail = false

let senha = document.querySelector('#senha')
let labelSenha = document.querySelector('#labelSenha')
let validSenha = false

let confirmSenha = document.querySelector('#confirmSenha')
let labelConfirmSenha = document.querySelector('#labelConfirmSenha')
let validConfirmSenha = false

// Seleciona as mensagens de erro e sucesso
let msgError = document.querySelector('#msgError')
let msgSuccess = document.querySelector('#msgSuccess')

// Event listener para verificar o campo de nome enquanto o usuário digita
nome.addEventListener('keyup', () => {
  if (nome.value.length <= 2) {
    labelNome.setAttribute('style', 'color: red')
    labelNome.innerHTML = 'Nome *Insira no mínimo 3 caracteres'
    nome.setAttribute('style', 'border-color: red')
    validNome = false
  } else {
    labelNome.setAttribute('style', 'color: green')
    labelNome.innerHTML = 'Nome'
    nome.setAttribute('style', 'border-color: green')
    validNome = true
  }
})

// Event listener para verificar o campo de usuário enquanto o usuário digita
usuario.addEventListener('keyup', () => {
  if (usuario.value.length <= 4) {
    labelUsuario.setAttribute('style', 'color: red')
    labelUsuario.innerHTML = 'Usuário *Insira no mínimo 5 caracteres'
    usuario.setAttribute('style', 'border-color: red')
    validUsuario = false
  } else {
    labelUsuario.setAttribute('style', 'color: green')
    labelUsuario.innerHTML = 'Usuário'
    usuario.setAttribute('style', 'border-color: green')
    validUsuario = true
  }
})

// Event listener para verificar o campo de e-mail enquanto o usuário digita
email.addEventListener('keyup', () => {
  let validDomains = ['@gmail.com', '@hotmail.com', 'yahoo.com', '@outlook']
  let emailValue = email.value
  let isValidEmail = validDomains.some(domain => emailValue.endsWith(domain))

  if (!isValidEmail) {
    labelemail.setAttribute('style', 'color: red')
    labelemail.innerHTML = 'E-mail *Insira um e-mail válido'
    email.setAttribute('style', 'border-color: red')
    validemail = false
  } else {
    labelemail.setAttribute('style', 'color: green')
    labelemail.innerHTML = 'E-mail'
    email.setAttribute('style', 'border-color: green')
    validemail = true
  }
})

// Event listener para verificar o campo de senha enquanto o usuário digita
senha.addEventListener('keyup', () => {
  if (senha.value.length <= 5) {
    labelSenha.setAttribute('style', 'color: red')
    labelSenha.innerHTML = 'Senha *Insira no mínimo 6 caracteres'
    senha.setAttribute('style', 'border-color: red')
    validSenha = false
  } else {
    labelSenha.setAttribute('style', 'color: green')
    labelSenha.innerHTML = 'Senha'
    senha.setAttribute('style', 'border-color: green')
    validSenha = true
  }
})

// Event listener para verificar o campo de confirmação de senha enquanto o usuário digita
confirmSenha.addEventListener('keyup', () => {
  if (senha.value != confirmSenha.value) {
    labelConfirmSenha.setAttribute('style', 'color: red')
    labelConfirmSenha.innerHTML = 'Confirmar Senha *As senhas não conferem'
    confirmSenha.setAttribute('style', 'border-color: red')
    validConfirmSenha = false
  } else {
    labelConfirmSenha.setAttribute('style', 'color: green')
    labelConfirmSenha.innerHTML = 'Confirmar Senha'
    confirmSenha.setAttribute('style', 'border-color: green')
    validConfirmSenha = true
  }
})

// Função para cadastrar o usuário
function cadastrar() {
  if (validNome && validUsuario && validemail && validSenha && validConfirmSenha) {
    let listaUser = JSON.parse(localStorage.getItem('listaUser') || '[]')

    listaUser.push({
      nomeCad: nome.value,
      userCad: usuario.value,
      emailCad: email.value,
      senhaCad: senha.value
    })

    localStorage.setItem('listaUser', JSON.stringify(listaUser))

    // Exibe mensagem de sucesso e redireciona para a página de login após 3 segundos
    msgSuccess.setAttribute('style', 'display: block')
    msgSuccess.innerHTML = '<strong>Cadastrando usuário...</strong>'
    msgError.setAttribute('style', 'display: none')
    msgError.innerHTML = ''

    setTimeout(() => {
      window.location.href = '../login/login.html'
    }, 3000)

  } else {
    // Exibe mensagem de erro se algum campo não estiver preenchido corretamente
    msgError.setAttribute('style', 'display: block')
    msgError.innerHTML = '<strong>Preencha todos os campos corretamente antes de cadastrar</strong>'
    msgSuccess.innerHTML = ''
    msgSuccess.setAttribute('style', 'display: none')
  }
}

// Event listener para alternar a visibilidade da senha
btn.addEventListener('click', () => {
  let inputSenha = document.querySelector('#senha')

  if (inputSenha.getAttribute('type') == 'password') {
    inputSenha.setAttribute('type', 'text')
  } else {
    inputSenha.setAttribute('type', 'password')
  }
})

// Event listener para alternar a visibilidade da confirmação de senha
btnConfirm.addEventListener('click', () => {
  let inputConfirmSenha = document.querySelector('#confirmSenha')

  if (inputConfirmSenha.getAttribute('type') == 'password') {
    inputConfirmSenha.setAttribute('type', 'text')
  } else {
    inputConfirmSenha.setAttribute('type', 'password')
  }
})

// Função para redirecionar o usuário para a página anterior
function voltar() {
  window.location.href = '../index.html'
}

/*=============== NOME DA PÁGINA ===============*/

// Armazena o título original da página
let docTitle = document.title

// Event listener para alterar o título da página quando a janela perde foco
window.addEventListener('blur', () => {
  document.title = 'Não vai se cadastrar não? 😠'
})

// Event listener para restaurar o título original da página quando a janela ganha foco
window.addEventListener('focus', () => {
  document.title = docTitle
})
