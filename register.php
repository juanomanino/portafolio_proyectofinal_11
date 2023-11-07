<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mí</title>
    <link rel="stylesheet" type="text/css" href="./css/menuyo.css"> <!-- Enlaza tu archivo CSS -->
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="./img/logo.png" alt="logo">
        </div>
        <h1 class="jn">JN Coding</h1>
        <nav class="menu">
            <ul>
                <li><a href="./index.html">Inicio</a></li>
                <li><a href="#"></a></li>
                <li><a href="./tienda.html">Tienda</a></li>
                <li><a href="#"></a></li>
                <li><a href="./menuyo.html">Sobre Mí</a></li>
                <li><a href="#"></a></li>
                <li><a href="#foro">Foro</a></li>
                <li><a href="#"></a></li>
                <li><a href="./login.php">Iniciar Sesión</a></li>
                <li><a href="#"></a></li>

            </ul>
        </nav>
    </header>
    
    <div id= "redondear">
                <form name = "formulario" method = "post" action="register.php">
                    <br>Nombre Completo: <input type = "text" name = "nombre" autofocus required placeholder = "Digite su nombre" size = "30">
                    <br>Contraseña: <input type = "text" name = "contrase" required placeholder = "Digite la contraseña que desea establecer" size = "40">
                    <br>Correo Electronico: <input type = "text" name = "correo" required placeholder = "Digite su correo" size = "40">
                    <br>Teléfono: <input type = "text" name = "telefono" required placeholder = "Digite teléfono" size = "20">
                   
                    <br>
                    <input type = "submit" name = "enviar" value = "Guardar Registro">
                    <input type = "reset" name = "limpiar" value = "Reestablecer campos">
                </form>
    </div>

    <?php
            if(isset($_POST['enviar']))
            {
                require('conexion.php');

                $nombre = $_POST['nombre'];
                $contraseña = $_POST['contraseña'];
                $correo = $_POST['correo'];
                $telefono = $_POST['telefono'];

                
                $insertar_registro = "INSERT INTO Usuario (nombre, contraseña, correo, telefono) VALUES ('$nombre', '$contraseña', '$correo')";

                $respuesta = mysqli_query($conexion, $register) or trigger_error("Error en la consulta MySQL: ".mysqli_error($conexion));

                if($respuesta)
                {
                    echo '<h1>Registro grabado</h1>';
                }
                else
                {
                    echo '<<h1>No se ha GRABADO el registro</h1>';
                }

                mysqli_close($conexion);
            }
        ?>
    </body>
</html>