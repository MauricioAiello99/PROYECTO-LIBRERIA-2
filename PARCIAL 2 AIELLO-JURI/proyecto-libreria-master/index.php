<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria Colores</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="imagenes/COLORES.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>
<header>
        <form>
            <label for="Buscar"> </label>
            <input type="text" id="Buscar" name="producto" placeholder="Buscar..." />
            <button>
                <a href="#"><i class="fas fa-search"></i></a>
            </button>
        </form>
        <a href="index.php" class="logo">

            <img src="imagenes/COLORES.png" alt="logo">
        </a>
        <div class="datos">
            <a href="" class="nav link">Contacto</a>
            <a href="formulario.php" class="nav link">Mi Cuenta</a>
            <button  id="carrito-button"><img src="imagenes/pngcarrito.png" alt="Carrito"></button> <!-- esto es nuevo -->

        </div>

    </header>
    <div class="saludo">
        <h3>BIENVENIDOS A LIBRERIA COLORES</h3>
    </div>
    <div class="botones">
        <div class="botones1">
            <button class="boton3">
                <a href="libreria.php">Libreria</a>
            </button>
        </div>
        <div class="botones2">
            <button class="boton3">
                <a href="papeleria.php">Papeleria</a>
            </button>
        </div>
    </div>
    <div class="calculadora-cont">
    <button class = "calculadora">
            <a href="calculadora.php ">Calcula tus cuotas</a> </button>
    </div>
    <div class="post">
        <img src="imagenes/imagen libreria tit.jpg" alt="imagen libreria" class="img1">
        <img src="imagenes/imagen papeleria tit.jpg" alt="imagen libreria" class="img1">
    </div>

    <footer class="footer">
        <div class="container">
            <div class="footer-row">
                <div class="footer-links">
                    <div class="social-link">
                        <h4>Síguenos</h4>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fas fa-map-marker-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
