<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar y obtener datos del formulario
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    // Eliminar usuario de la base de datos
    $sql = "DELETE FROM usuarios WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario eliminado correctamente";
    } else {
        echo "Error al eliminar usuario: " . $conn->error;
    }
}

$conn->close();
?>
