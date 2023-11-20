let contador = 0;
const botao = document.getElementById('botao');

botao.addEventListener('click', function() {
  contador++;
  botao.textContent = `Clicado ${contador} vez${contador !== 1 ? 'es' : ''}`;
});