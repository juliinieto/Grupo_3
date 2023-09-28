<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hospital Privado</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="icon" href="logo.png" type="logo.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            background-image: url('fondo.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
<header>
        <div class="logo">
            <img src="logo.png" alt="Logo del hospital">
            <h1>Hospital Privado</h1>
        </div>
        <div class="menu-toggle" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </header>
    <nav>
        <ul class="menu">
            <li><a href="/hospital/menu/menuP.php">Inicio</a></li>
            <li><a href="/hospital/menu/serviciosP.php">Servicios</a></li>
            <li><a href="/hospital/menu/atencionP.php">Atención Médica</a></li>
            <li><a href="/hospital/doctor/doctorP.php">Doctores</a></li>
            <li><a href="/hospital/MIA/mi_ficha.php">Fichas</a></li>


        </ul>
    </nav>
        <div class="slider">
                <div class="slider-container">
                    <img src="img/hospital1.jpg" alt="">
                    <img src="img/hospital2.jpg" alt="">
                    <img src="img/hospital3.png" alt="">
                    <img src="img/hospital4.jpg" alt="">
                    <img src="img/hospital1.jpg" alt="">
                    <img src="img/hospital2.jpg" alt="">
                    <img src="img/hospital3.png" alt="">
                    <img src="img/hospital4.jpg" alt="">
                    <img src="img/hospital1.jpg" alt="">

                    
                    <!-- Agrega más imágenes aquí si es necesario -->
                </div>
        </div>
        <audio id="music" autoplay loop>
            <source src="hotline(1).mp3" type="audio/mpeg">
            Tu navegador no soporta la reproducción de audio.
        </audio>
        <script src="script.js"></script>




    <script>
        function toggleMenu() {
            var menu = document.querySelector('.menu');
            menu.classList.toggle('active');
        }
    </script>




<footer>
        <div id="info-hospital">
            <h3>Información de Contacto</h3>
            <p>Teléfono: +123 456 789</p>
            <p>Correo Electrónico: info@hospitalprivado.com</p>
            <p>Dirección: Calle Hospital, Ciudad, País</p>
        </div>
	<p>Dejanos tu opinion sobre tu experiencia </p>
        <a href="/hospital/opiniones/opiniones.php">opiniones</a>
    </footer>
</body>
</html>
