function agregarCaracter(caracter) {
    let pantalla = document.getElementById('pantalla');
    pantalla.value += caracter;
}

function calcularResultado() {
    let pantalla = document.getElementById('pantalla');
    try {
        pantalla.value = eval(pantalla.value);
    } catch (error) {
        pantalla.value = 'Error';
    }
}

function limpiarPantalla() {
    document.getElementById('pantalla').value = '';
}
