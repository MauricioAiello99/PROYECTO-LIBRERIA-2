<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="formulario.css">
    <link rel="shortcut icon" href="imagenes/COLORES.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>
    <header>
        <form>
            <label for="Buscar"></label>
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
            <a href="" class="nav link">Mi Cuenta</a>
            <a href="#"><i class="fas fa-shopping-cart"></i></a>
        </div>
    </header>
    <div class="registro">
        <div id="inicioSesionSection">

            <form class="cuerpo" id="inicioSesionForm" action="login.php" method="post">
            
                <h4>Iniciar Sesión</h4>

                <?php
                include("login.php");
                ?>

                <h6 id="registroResultado" ></h6>
                <div class="rellenables">
                    <input class="textfiel" type="email" id="inicioSesionEmail" placeholder="Correo"
                        name="inicioSesionEmail" required>
                    <img class="iconos" src="imagenes/iconos/email.svg" alt="">
                </div>

                <div class="rellenables">
                    <input class="textfiel" type="password" id="inicioSesionPassword" placeholder="Contraseña"
                        name="inicioSesionPassword" required>
                    <img class="iconos" src="imagenes/iconos/password.svg" alt="">
                </div>

                <input type="submit" class="btn" name="inicio_sesion" value="Iniciar Sesión">
                <button class="btn" onclick="toggleForm('registro')">Registrarse</button>
            </form>

        </div>


        <div id="registroSection" style="display: none;">
            <form class="cuerpo" id="registroForm" action="registrar.php" method="post">
            <h6 id="registroResultado" ></h6>
                <h4>Registrarse</h4>
                <div class="rellenables">
                    <input class="textfiel" type="text" id="registroNombre" placeholder="Nombre y Apellido"
                        name="nombre" required>
                    <img class="iconos" src="imagenes/iconos/name.svg" alt="">
                </div>

                <div class="rellenables">
                    <input class="textfiel" type="email" id="registroEmail" placeholder="Correo" name="email" required>
                    <img class="iconos" src="imagenes/iconos/email.svg" alt="">
                </div>
                <div class="rellenables">
                    <input class="textfiel" type="text" id="registroDireccion" placeholder="Direccion" name="direccion"
                        required>
                    <img class="iconos" src="imagenes/iconos/direction.svg" alt="">
                </div>
                <div class="rellenables">
                    <input class="textfiel" type="tel" id="registroTelefono" placeholder="Telefono" name="telefono"
                        required>
                    <img class="iconos" src="imagenes/iconos/phone.svg" alt="">
                </div>
                <div class="rellenables">
                    <input class="textfiel" type="password" id="registroContraseña" placeholder="Contraseña"
                        name="contraseña" required>
                    <img class="iconos" src="imagenes/iconos/password.svg" alt="">
                </div>

                <input type="submit" class="btn" name="registra_sesion" value="Registrarse">
                <button class="btn" onclick="toggleForm('inicioSesion')">Volver a Iniciar Sesión</button>
            </form>

        </div>
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

    <script>
        function toggleForm(formType) {
            if (formType === 'registro') {
                document.getElementById("registroSection").style.display = "block";
                document.getElementById("inicioSesionSection").style.display = "none";
            } else {
                document.getElementById("registroSection").style.display = "none";
                document.getElementById("inicioSesionSection").style.display = "block";
            }
        }

        document.getElementById("registroForm").addEventListener("submit", function (event) {
            var nombre = document.getElementById("registroNombre").value;
            var email = document.getElementById("registroEmail").value;
            var direccion = document.getElementById("registroDireccion").value;
            var telefono = document.getElementById("registroTelefono").value;
            var contraseña = document.getElementById("registroContraseña").value;



            if (!validateEmail(email)) {
                alert("El correo electrónico no es válido.");
            }

            if (telefono.length < 9) {
                alert("El telefono debe tener al menos 9 caracteres.");
            }

            if (contraseña.length < 6) {
                alert("La contraseña debe tener al menos 6 caracteres.");
            }
        });
        function validateEmail(email) {
            var re = /\S+@\S+\.\S+/;
            return re.test(email);
        }

        <?php
    if (isset($_GET['registro'])) {
        if ($_GET['registro'] == 'exito') {
            echo 'document.getElementById("registroResultado").style.color = "green";';
            echo 'document.getElementById("registroResultado").innerHTML = "Registro exitoso";';
        } elseif ($_GET['registro'] == 'error') {
            echo 'document.getElementById("registroResultado").style.color = "red";';
            echo 'document.getElementById("registroResultado").innerHTML = "Ocurrió un error al registrar";';
        }
    }
    ?>
    </script>

</body>

</html>