<?php

$conexion = new mysqli("localhost", "root", "", "registroslibreriacolores");
$conexion-> set_charset("utf8");

if(!empty($_POST["inicio_sesion"])){
    if (empty($_POST["inicioSesionEmail"]) && empty($_POST["inicioSesionPassword"])) {
    echo "Los campos estan vacios.";
    } else {
    $usuario = $_POST["inicioSesionEmail"];
    $clave = $_POST["inicioSesionPassword"];
    session_start();
    $sql = $conexion->query("SELECT * FROM datos WHERE email='$usuario' AND contraseña='$clave'");
    if($datos=$sql->fetch_object()){
    header("Location: index.php");
    } else {
        echo "Acceso denegado";
    }
    }
    
    }

?>