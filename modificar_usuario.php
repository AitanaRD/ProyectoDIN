<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar y obtener datos del formulario
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $nuevo_nombre = mysqli_real_escape_string($conn, $_POST['nuevo_nombre']);

    // Modificar nombre de usuario en la base de datos
    $sql = "UPDATE usuarios SET nombre='$nuevo_nombre' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario modificado correctamente";
    } else {
        echo "Error al modificar usuario: " . $conn->error;
    }
}

$conn->close();
?>
