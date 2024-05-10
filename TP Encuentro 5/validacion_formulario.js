document.getElementById('formulario').addEventListener('submit', function(event) {
    let nombre = document.getElementById('nombre').value;
    let email = document.getElementById('email').value;
    let contrasena = document.getElementById('contrasena').value;

    if (nombre === '' || email === '' || contrasena === '') {
        event.preventDefault();
        alert('Todos los campos son obligatorios.');
    }
});
