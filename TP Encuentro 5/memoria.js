const tablero = document.getElementById('tablero');
const tarjetas = [];
const iconos = ['🍎', '🍌', '🍒', '🍇', '🍉', '🍓', '🍍', '🥭'];

// Duplica los iconos para tener pares y mezcla las tarjetas
const iconosDuplicados = iconos.concat(iconos).sort(() => Math.random() - 0.5);

iconosDuplicados.forEach((icono, index) => {
    const tarjeta = document.createElement('div');
    tarjeta.classList.add('tarjeta');
    tarjeta.dataset.icono = icono;
    tarjeta.dataset.index = index;
    tarjeta.addEventListener('click', voltearTarjeta);
    tablero.appendChild(tarjeta);
    tarjetas.push(tarjeta);
});

let tarjetaVolteada = null;
let bloqueado = false;

function voltearTarjeta() {
    if (bloqueado) return;
    if (this === tarjetaVolteada) return;

    this.classList.add('volteada');
    this.innerText = this.dataset.icono;

    if (!tarjetaVolteada) {
        tarjetaVolteada = this;
        return;
    }

    if (this.dataset.icono === tarjetaVolteada.dataset.icono) {
        this.classList.add('coincide');
        tarjetaVolteada.classList.add('coincide');
        tarjetaVolteada = null;
    } else {
        bloqueado = true;
        setTimeout(() => {
            this.classList.remove('volteada');
            this.innerText = '';
            tarjetaVolteada.classList.remove('volteada');
            tarjetaVolteada.innerText = '';
            tarjetaVolteada = null;
            bloqueado = false;
        }, 1000);
    }
}
