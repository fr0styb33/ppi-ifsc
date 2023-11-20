let resultado = document.querySelector('.resultado');
        let buttons = document.querySelectorAll('.calculadora button');
        let calculo = '';

        buttons.forEach(button => {
            button.addEventListener('click', function () {
                if (this.innerText === '=') {
                    try {
                        calculo = calculo.replace("×", "*");
                        calculo = eval(calculo).toString();
                        resultado.innerText = calculo;
                    } catch (error) {
                        calculo = 'Error';
                    }
                    calculo = "";
                } else {
                    calculo += this.innerText+" ";
                    resultado.innerText = calculo;
                }
            });
        });