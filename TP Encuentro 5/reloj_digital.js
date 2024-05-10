function actualizarReloj() {
    let ahora = new Date();
    let hora = ahora.getHours();
    let minutos = ahora.getMinutes();
    let segundos = ahora.getSeconds();
    document.getElementById('reloj').innerText = `${hora}:${minutos}:${segundos}`;
}
setInterval(actualizarReloj, 1000);
