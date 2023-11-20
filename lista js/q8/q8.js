function calcularFatorial() {
    const numero = parseInt(document.getElementById('inputNumero').value);
    const resultado = document.getElementById('resultado');

    if (!isNaN(numero) && numero >= 0) {
      let fatorial = 1;
      for (let i = 2; i <= numero; i++) {
        fatorial *= i;
      }
      resultado.textContent = `Fatorial de ${numero} é: ${fatorial}`;
    } else {
      resultado.textContent = 'Por favor, insira um número positivo inteiro.';
    }
  }

  function calcularFibonacci() {
    const numero = parseInt(document.getElementById('inputNumero').value);
    const resultado = document.getElementById('resultado');

    if (!isNaN(numero) && numero >= 0) {
      let a = 0;
      let b = 1;
      let fibonacci = '';

      for (let i = 0; i < numero; i++) {
        fibonacci += a + ' ';
        const temp = a + b;
        a = b;
        b = temp;
      }
      resultado.textContent = `Sequência de Fibonacci para ${numero} números: ${fibonacci}`;
    } else {
      resultado.textContent = 'Por favor, insira um número válido (positivo inteiro).';
    }
  }