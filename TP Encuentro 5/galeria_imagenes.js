let indiceImagen = 0;
let imagenes = ['imagen1.jpg', 'imagen2.jpg', 'imagen3.jpg'];

function mostrarImagenAnterior() {
    indiceImagen = (indiceImagen - 1 + imagenes.length) % imagenes.length;
    document.getElementById('galeria').getElementsByTagName('img')[0].src = imagenes[indiceImagen];
}

function mostrarImagenSiguiente() {
    indiceImagen = (indiceImagen + 1) % imagenes.length;
    document.getElementById('galeria').getElementsByTagName('img')[0].src = imagenes[indiceImagen];
}
