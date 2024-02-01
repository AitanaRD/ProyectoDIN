<?php
include 'conexion.php';

// Consulta para obtener la lista de usuarios
$sql = "SELECT id, nombre, email FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $usuarios = array();

    while($row = $result->fetch_assoc()) {
        $usuarios[] = array(
            'id' => $row['id'],
            'nombre' => $row['nombre'],
            'email' => $row['email']
        );
    }

    // Devolver los datos en formato JSON
    header('Content-Type: application/json');
    echo json_encode($usuarios);
} else {
    echo 'No hay usuarios disponibles.';
}

$conn->close();
?>
