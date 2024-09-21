<?php
include 'basedatos.php'; // Cargar la conexion a la base de datos

// Verificar si los datos necesarios han sido enviados
if (!isset($_POST['usuario']) || !isset($_POST['clave'])) {
    // Mensaje de error en caso de que falte el usuario o la clave
    echo "Datos incompletos.";
    exit(); // Detener la ejecucion 
}

// Recibir los datos del formulario
$username = $_POST['usuario'];
$password = $_POST['clave'];

// Preparar la consulta SQL para evitar inyección SQL
$sql = "SELECT * FROM usuarios WHERE username=?";
$Statement = $conexion->prepare($sql);
// // Asignar el valor de $username a la consulta
$Statement->bind_param('s', $username);
$Statement->execute();
$result = $Statement->get_result();

// Verificar si se encontra un usuario con el nombre proporcionado
if ($result->num_rows > 0) {
    // // fetch_assoc(): Obtiene la fila de resultados como un arreglo asociativo
    $row = $result->fetch_assoc();
    
    // Verificar la clave encriptada
    if (password_verify($password, $row['clave'])) {
        // Mensaje de error en caso de que la autenticacion sea exitosa
        echo "Autenticacion satisfactoria.";
    } else {
        // Mensaje de error en caso de que la clave sea incorrecta
        echo "Clave incorrecta.";
    }
} else {
    // Mensaje de error en caso de que no se encontre un usuario con ese nombre
    echo "Usuario no encontrado.";
}

// Cerrar la declaracion y la conexion a la base de datos
$Statement->close();
$conexion->close();
?>
