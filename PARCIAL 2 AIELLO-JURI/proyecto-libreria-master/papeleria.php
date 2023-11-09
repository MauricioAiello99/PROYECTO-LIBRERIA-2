<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria Colores</title>
    <link rel="stylesheet" href="papeleria.css">
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
    <div class="inicio">
        <button class="binicio">
            <a href="index.php">Inicio</a>
        </button>
    </div>
    <div class="papeleria">
        <H4>PAPELERIA</H4>
    </div>
    <div class="productos">
        <div class="producto-card">
            <img src="imagenes/PAPALERIA1.JPG" alt="">
            <h4>Papel Madera</h4>
            <div class="producto-precio">
                <p>$140</p>
                <button href="#"><i class="fas fa-shopping-cart"></i></button>
            </div>
        </div>
        <div class=" producto-card">
            <img src="imagenes/PAPALERIA2.JPG" alt="">
            <h4>Resaltador filgo pastel</h4>
            <div class="Goma Eva">
                <p>$320</p>
                <button href="#"><i class="fas fa-shopping-cart"></i></button>
            </div>
        </div>
        <div class="producto-card">
            <img src="imagenes/PAPALERIA 4.JPG" alt="">
            <h4>Afiche blanco</h4>
            <div class="producto-precio">
                <p>$230</p>
                <button href="#"><i class="fas fa-shopping-cart"></i></button>
            </div> 
            
        </div>

        <div class="producto-card">
            <img src="imagenes/PAPALERIA 5.JPG" alt="">
            <h4>Cartulina</h4>
            <div class="producto-precio">
                <p>$230</p>
                <button href="#"><i class="fas fa-shopping-cart"></i></button>
            </div>
        </div>
        <div class=" producto-card">
            <img src="imagenes/PAPALERIA 6.JPG" alt="">
            <h4>Papel Glace</h4>
            <div class="producto-precio">
                <p>$130</p>
                <button href="#"><i class="fas fa-shopping-cart"></i></button>
            </div>
        </div>
        <div class=" producto-card">
            <img src="imagenes/PAPALERIA 4.JPG" alt="">
            <h4>Afiche Blanco</h4>
            <div class="producto-precio">
                <p>$230</p>
                <button href="#"><i class="fas fa-shopping-cart"></i></button>
            </div>
        </div>

    </div>

    <footer class="footer">
        <div class="container">
            <div class="footer-row">
                <div class="footer-links">

                    <div class="social-link">
                        <h4>Siguenos</h4>
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