<?php
include 'basedatos.php'; // Cargar conexion a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recibir los datos del formulario
    $username = $_POST['usuario']; 
    $password = password_hash($_POST['clave'], PASSWORD_BCRYPT); // encriptar la clave

    // Preparar la consulta SQL 
    $sql = $conexion->prepare("INSERT INTO usuarios (username, clave) VALUES (?, ?)");
    $sql->bind_param('ss', $username, $password); // 'ss' indica que los dos parametros son strings

    // Ejecutar consulta y verificar si fue exitosa
    if ($sql->execute()) {
        echo "Registro exitoso.";
    } else {
        echo "Error: " . $sql->error;
    }

    // Cerrar consulta
    $sql->close();
}

// Cerrar la conexion a la base de datos
$conexion->close();
?>
