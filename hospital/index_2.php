<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hospital Privado</title>
    <link rel="stylesheet" type="text/css" href="css.css">
    <link rel="icon" href="logo.png" type="logo.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Logo del hospital">
            <h1>Hospital</h1>
        </div>
        <div class="login-register">
            <a href="usuarios/login.php">Iniciar Sesión</a> / <a href="usuarios/registro.php">Registrarse</a>
        </div>
    </header>
    <nav>
    
        <div class="menu-toggle" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
            <ul class="menu">
                <li><a href="https://www.example.com/enlace1">Enlace 1</a></li>
                <li><a href="https://www.example.com/enlace2">Enlace 2</a></li>
                <li><a href="https://www.example.com/enlace3">Enlace 3</a></li>
            </ul>
        </div>
    </nav>


    
    <footer>
        <!-- Aquí puedes agregar el pie de página de tu página -->
    </footer>

    <script>
        function toggleMenu() {
            var menu = document.querySelector('.menu');
            menu.classList.toggle('active');
        }
        
    </script>

</body>
</html>
