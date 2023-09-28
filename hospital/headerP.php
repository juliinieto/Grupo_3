<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <title>Hospital Privado</title>
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
    <script>
        function toggleMenu() {
            var menu = document.querySelector('.menu');
            menu.classList.toggle('active');
        }

        document.getElementById("filtroServicios").addEventListener("change", function() {
            var seleccion = this.value;
            var servicios = document.querySelectorAll(".service");
            
            for (var i = 0; i < servicios.length; i++) {
                var servicio = servicios[i];
                
                if (seleccion === "todos" || servicio.id === seleccion) {
                    servicio.style.display = "block";
                } else {
                    servicio.style.display = "none";
                }
            }
        });
    </script>
</body>
</html>
