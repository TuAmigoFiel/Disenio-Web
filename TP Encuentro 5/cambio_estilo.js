let elemento = document.getElementById("cuerpo");
function cambiarEstilo() {
    
    if (elemento.classList.contains("fondo")){
        elemento.classList.remove("fondo");
    }
    else{
        elemento.classList.add("fondo");
    } 
}
