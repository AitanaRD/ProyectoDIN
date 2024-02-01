$(document).ready(function() {
    // Realizar una solicitud AJAX para obtener la lista de usuarios
    $.ajax({
        url: 'php/obtener_usuarios.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            if (data && data.length > 0) {
                $('#usuariosList').empty();

                data.forEach(function(usuario) {
                    $('#usuariosList').append('<li>ID: ' + usuario.id + ' - Nombre: ' + usuario.nombre + ' - Email: ' + usuario.email + '</li>');
                });

                // Mostrar el nombre del usuario desde la variable de sesión
                mostrarNombreUsuario();
            } else {
                $('#usuariosList').append('<li>No hay usuarios disponibles.</li>');
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error('Error al obtener la lista de usuarios:', textStatus, errorThrown);
            mostrarPaginaError();
        }
    });

    // Función para mostrar el nombre del usuario desde la variable de sesión
    function mostrarNombreUsuario() {
        $.ajax({
            url: 'php/obtener_nombre_usuario.php',
            type: 'GET',
            success: function(nombreUsuario) {
                $('#nombreUsuario').text(nombreUsuario);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Error al obtener el nombre del usuario:', textStatus, errorThrown);
                mostrarPaginaError();
            }
        });
    }

    // Función para mostrar la página de error
    function mostrarPaginaError() {
        // Redirige a la página de error
        window.location.href = 'error.html';
    }
});
