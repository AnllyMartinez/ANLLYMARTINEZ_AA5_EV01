<?php
$config = include('config.php'); // Cargar el archivo 'config.php' que contiene las configuraciones de la base de datos
// Crear una nueva conexion a la base de datos utilizando los datos de configuracion
$conexion = new mysqli($config['host'], $config['user'], $config['password'], $config['bdname']); 

// Verificar si la conexion fue exitosa
if ($conexion->connect_error) {
    // Mensaje de error en caso de falla en la conexion
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
