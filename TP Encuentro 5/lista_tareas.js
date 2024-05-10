function agregarTarea() {
    let nuevaTarea = document.getElementById('nueva-tarea').value;
    if (nuevaTarea.trim() !== '') {
        let listaTareas = document.getElementById('tareas');
        let nuevaLista = document.createElement('li');
        nuevaLista.textContent = nuevaTarea;
        nuevaLista.onclick = function() {
            this.parentNode.removeChild(this);
        };
        listaTareas.appendChild(nuevaLista);
        document.getElementById('nueva-tarea').value = '';
    }
}
