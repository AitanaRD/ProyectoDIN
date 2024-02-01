$(document).ready(function() {
    $('#registroForm').submit(function(event) {
        // Evitar el envío del formulario por defecto
        event.preventDefault();

        // Validar campos
        if (validarFormulario()) {
            // Si la validación es exitosa, enviar el formulario
            this.submit();
        }
    });

    function validarFormulario() {
        // Validar nombre
        var nombre = $('#nombre').val();
        if (nombre === "") {
            alert("Por favor, ingrese su nombre.");
            return false;
        }

        // Validar email
        var email = $('#email').val();
        if (email === "") {
            alert("Por favor, ingrese su correo electrónico.");
            return false;
        }

        // Validar contraseña
        var password = $('#password').val();
        if (password === "") {
            alert("Por favor, ingrese su contraseña.");
            return false;
        }

        return true;
    }
});
