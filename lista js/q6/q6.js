let botao = document.getElementById("botao");

function generateRandomColor() {
    let randomColor = Math.floor(Math.random()*16777215).toString(16);
    return "#" + randomColor;
}

let cor1 = document.getElementById("cor1");
let cor2 = document.getElementById("cor2");
let cor3 = document.getElementById("cor3");
let cor4 = document.getElementById("cor4");
let cor5 = document.getElementById("cor5");

function randomize() {
    cor1.style.backgroundColor = generateRandomColor();
    cor2.style.backgroundColor = generateRandomColor();
    cor3.style.backgroundColor = generateRandomColor();
    cor4.style.backgroundColor = generateRandomColor();
    cor5.style.backgroundColor = generateRandomColor();
}

randomize();
botao.addEventListener("click", randomize);