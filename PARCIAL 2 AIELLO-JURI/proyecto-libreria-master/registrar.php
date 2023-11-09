<?php

$conex = mysqli_connect("localhost", "root", "", "registroslibreriacolores");
if (!$conex) {
    die("Error en la conexión a la base de datos: " . mysqli_connect_error());
}

if(isset($_POST['registra_sesion'])){
    if(
    strlen($_POST['nombre']) >= 1 &&
    strlen($_POST['email']) >= 1 &&
    strlen($_POST['direccion']) >= 1 &&
    strlen($_POST['telefono']) >= 1 &&
    strlen($_POST['contraseña']) >= 1 ){
        $nombre = trim ($_POST['nombre']);
        $email = trim ($_POST['email']);
        $direccion = trim ($_POST['direccion']);
        $telefono = trim ($_POST['telefono']);
        $contraseña = trim ($_POST['contraseña']);
        $fecha = date("d/m/y");
        $consulta = "INSERT INTO datos(nombre, email, direccion, telefono, contraseña, fecha)
        VALUES('$nombre', '$email', '$direccion', '$telefono', '$contraseña', '$fecha')";
        $resultado = mysqli_query($conex, $consulta);
        if($resultado){
            
            header("Location: formulario.php?registro=exito");
        } else {
            ?>
            <h3 class="error">Ocurrio un error</h3>
            <?php
            header("Location: formulario.php?registro=error");
        }
    } else {
        ?>
        <h3 class="error">LLena todos los campos</h3>
        <?php
        header("Location: formulario.php?registro=error");
        
    }
}
?>