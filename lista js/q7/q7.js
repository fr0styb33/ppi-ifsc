const inputNota = document.getElementById('inputNota');
  const btnAdicionar = document.getElementById('btnAdicionar');
  const listaNotas = document.getElementById('listaNotas');

  btnAdicionar.addEventListener('click', () => {
    const nota = inputNota.value.trim();
    if (nota !== '') {
      const li = document.createElement('li');
      li.textContent = nota;
      listaNotas.appendChild(li);
      inputNota.value = '';
    } else {
      alert('Por favor, redigite uma nota válida.');
    }
  });