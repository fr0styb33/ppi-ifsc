let numA = prompt("Digite o número A:");
numeroA = parseInt(numA);

if (!isNaN(numA)) {
  for (let i = 1; i <= numA; i++) {
    console.log(i);
  }
} else {
  console.log("Por favor, redigite um número válido.");
}
