<?php
// Inicia la sesión
session_start();

// Simula la autenticación del usuario (deberías tener un sistema real aquí)
$usuario = array(
    'id' => 1,
    'nombre' => 'UsuarioDemo',
    'email' => 'usuario@example.com'
);

// Almacena la información del usuario en la variable de sesión
$_SESSION['usuario'] = $usuario;
?>
