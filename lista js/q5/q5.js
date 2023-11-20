function somar() {
    const numero1 = parseFloat(document.getElementById('num1').value);
    const numero2 = parseFloat(document.getElementById('num2').value);
    const resultado = document.getElementById('resultado');

    if (!isNaN(numero1) && !isNaN(numero2)) {
      const soma = numero1 + numero2;
      resultado.textContent = `Resultado: ${soma}`;
    } else {
      resultado.textContent = 'Por favor, insira números válidos.';
    }
  }