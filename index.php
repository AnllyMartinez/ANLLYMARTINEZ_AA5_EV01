<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión y Registro</title>

    <!-- Enlace a la fuente Roboto de Google  -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            gap: 40px; /* Mayor separacion entre los formularios */
        }

        /* Estilos comunes a ambos formularios */
        .form-container {
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            margin-bottom: 20px;
            font-weight: 500;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 6px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Estilos del botón */
        input[type="submit"] {
            padding: 10px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        input[type="submit"]:active {
            box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
        }

        /* Estilos para el formulario de LOGIN */
        .login-form {
            background-color: #d4edda; 
            border: 2px solid #3e8e41 ; /* Linea alrededor verde */
        }

        .login-form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
        }

        .login-form input[type="submit"]:hover { /* Cambio de color si el cursor esta encima*/
            background-color: #3e8e41;
        } 

        /* Estilos para formulario de registro */
        .register-form {
            background-color: #d0e7ff; 
            border: 2px solid #2196F3; /* Linea alrededor */
        }

        .register-form input[type="submit"] {
            background-color: #2196F3;
            color: white;
        }

        .register-form input[type="submit"]:hover { /* Cambio de color si el cursor esta encima*/
            background-color: #1976D2;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Formulario LOGIN -->
        <div class="form-container login-form">
            <h2>Iniciar sesión</h2>
            <form action="login.php" method="POST">
                <input type="text" name="usuario" placeholder="Usuario" required>               
                <input type="password" name="clave" placeholder="Clave" required>               
                <input type="submit" value="Iniciar sesión"> <!-- Boton -->
            </form>
        </div>

        <!-- Formulario de REGISTRO -->
        <div class="form-container register-form">
            <h2>Registro</h2>
            <form action="registrar.php" method="POST">
                <input type="text" name="usuario" placeholder="Nombre de usuario" required>
                <input type="password" name="clave" placeholder="Clave" required>
                <input type="password" name="confirmar_clave" placeholder="Confirmar clave" required>
                <input type="submit" value="Registrar">
            </form>
        </div>
    </div>
</body>
</html>
