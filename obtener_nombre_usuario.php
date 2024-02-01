<?php
session_start();

// Verificar si la variable de sesión existe y contiene información del usuario
if (isset($_SESSION['usuario']) && isset($_SESSION['usuario']['nombre'])) {
    // Devolver el nombre del usuario
    echo $_SESSION['usuario']['nombre'];
} else {
    // Si no hay información del usuario en la sesión, devuelve un valor predeterminado
    echo 'Usuario Desconocido';
}
?>
