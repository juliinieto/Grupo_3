<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Áreas y Servicios del Hospital</title>
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
    < <header>
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
            <li><a href="/hospital/menu/menu.php">Inicio</a></li>
            <li><a href="/hospital/menu/servicios.php">Especialidades</a></li>
            <li><a href="/hospital/menu/atencion.php">Atención Médica</a></li>
            <li><a href="doctores.php">Doctores</a></li>
            <li><a href="/hospital/ficha/inicio_ficha.php">Fichas</a></li>
        </ul>
    </nav>
    
    <section>
    <h2>Servicios Hospitalarios</h2>

    <label for="filtroServicios">Filtrar por categoría:</label>
    <select id="filtroServicios">
        <option value="todos">Todos</option>
        <option value="ConsultaExterna">Consulta Externa</option>
        <option value="Hospitalizacion">Hospitalización</option>
        <option value="ImagenesDiagnosticas">Imágenes Diagnósticas</option>
        <option value="LaboratorioClinico">Laboratorio Clínico</option>
        <option value="Farmacia">Farmacia</option>
        <option value="FarmacologiaClinica">Farmacología Clínica</option>
        <option value="CuidadosIntensivos">Cuidados Intensivos</option>
        <option value="Maternidad">Maternidad</option>
        <option value="Rehabilitacion">Rehabilitación</option>
        <option value="AtencionPersonasMayores">Atención a Personas Mayores</option>
        <option value="EnfermedadesInfecciosas">Atención a Enfermedades Infecciosas</option>
    </select>

    <div class="service" id="ConsultaExterna">
        <h3><a href="#ConsultaExterna">Consulta Externa</a></h3>
        <p>Atención médica ambulatoria para pacientes que no requieren hospitalización. Esto incluye consultas con médicos generales y especialistas.</p>
    </div>

    <div class="service" id="Hospitalizacion">
        <h3><a href="#Hospitalizacion">Hospitalización</a></h3>
        <p>Tratamiento y cuidado de pacientes que necesitan permanecer en el hospital para procedimientos médicos, cirugía, observación o recuperación.</p>
    </div>

    <div class="service" id="ImagenesDiagnosticas">
        <h3><a href="#ImagenesDiagnosticas">Imágenes Diagnósticas</a></h3>
        <p>Servicios como radiología, tomografía computarizada (TC), resonancia magnética (RM), ultrasonido y radiografías para diagnóstico y seguimiento.</p>
    </div>

    <div class="service" id="LaboratorioClinico">
        <h3><a href="#LaboratorioClinico">Laboratorio Clínico</a></h3>
        <p>Análisis de sangre, orina y otros fluidos corporales para diagnosticar enfermedades y evaluar la función orgánica.</p>
    </div>

    <div class="service" id="Farmacia">
        <h3><a href="#Farmacia">Farmacia</a></h3>
        <p>Suministro de medicamentos y asesoramiento sobre su uso adecuado.</p>
    </div>

    <div class="service" id="FarmacologiaClinica">
        <h3><a href="#FarmacologiaClinica">Farmacología Clínica</a></h3>
        <p>Supervisión y gestión de medicamentos para garantizar su seguridad y eficacia.</p>
    </div>

    <div class="service" id="CuidadosIntensivos">
        <h3><a href="#CuidadosIntensivos">Cuidados Intensivos</a></h3>
        <p>Atención médica especializada para pacientes gravemente enfermos que requieren monitoreo constante y tratamiento intensivo.</p>
    </div>

    <div class="service" id="Maternidad">
        <h3><a href="#Maternidad">Maternidad</a></h3>
        <p>Atención prenatal, parto y atención postnatal para mujeres embarazadas.</p>
    </div>

    <div class="service" id="Rehabilitacion">
        <h3><a href="#Rehabilitacion">Rehabilitación</a></h3>
        <p>Terapia física, ocupacional y del habla para pacientes que necesitan recuperación después de una lesión o cirugía.</p>
    </div>

    <div class="service" id="AtencionPersonasMayores">
        <h3><a href="#AtencionPersonasMayores">Atención a Personas Mayores</a></h3>
        <p>Atención médica y servicios para personas mayores, incluyendo cuidados a largo plazo y unidades de cuidados geriátricos.</p>
    </div>

    <div class="service" id="EnfermedadesInfecciosas">
        <h3><a href="#EnfermedadesInfecciosas">Atención a Enfermedades Infecciosas</a></h3>
        <p>Diagnóstico y tratamiento de enfermedades infecciosas, como VIH/SIDA, tuberculosis y enfermedades de transmisión sexual.</p>
    </div>
</section>


    <footer>
        <div id="info-hospital">
            <h3>Información de Contacto</h3>
            <p>Teléfono: +123 456 789</p>
            <p>Correo Electrónico: info@hospitalprivado.com</p>
            <p>Dirección: Calle Hospital, Ciudad, País</p>
        </div>
        <div id="redes-sociales">
            <h3>Síguenos en Redes Sociales</h3>
            <a href="#"><img src="facebook.png" alt="Facebook"></a>
            <a href="#"><img src="twitter.png" alt="Twitter"></a>
            <a href="#"><img src="instagram.png" alt="Instagram"></a>
        </div>
    </footer>

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
