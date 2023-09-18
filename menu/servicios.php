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

        <ul class="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#servicios">Servicios</a></li>
            <li><a href="especialidades.php">Especialidades</a></li>
            <li><a href="doctores.php">Doctores</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </nav>
    
    <section>
        <h2>Áreas y Servicios del Hospital</h2>
        
        <label for="filtroServicios">Filtrar por categoría:</label>
        <select id="filtroServicios">
            <option value="todos">Todos</option>
            <option value="Cirugía">Cirugía</option>
            <option value="Pediatría">Pediatría</option>
            <option value="Ginecología y Obstetricia">Ginecología y Obstetricia</option>
            <option value="Neurología">Neurología</option>
            <option value="Cardiología">Cardiología</option>
            <option value="Oftalmología">Oftalmología</option>
            <option value="Otorrinolaringología">Otorrinolaringología (ORL)</option>
            <option value="Dermatología">Dermatología</option>
            <option value="Radiología">Radiología</option>
            <option value="Laboratorio Clínico">Laboratorio Clínico</option>
            <option value="Farmacia">Farmacia</option>
            <option value="Cuidados Intensivos">Cuidados Intensivos (UCI)</option>
            <option value="Traumatología">Traumatología</option>
            <option value="Psiquiatría">Psiquiatría</option>
            <option value="Rehabilitación">Rehabilitación</option>
            <option value="Cuidados Paliativos">Cuidados Paliativos</option>
            <option value="Nutrición y Dietética">Nutrición y Dietética</option>
            <option value="Servicios Sociales">Servicios Sociales</option>
            <option value="Imagenología">Imagenología</option>
            <option value="Endoscopia">Endoscopia</option>
            <option value="Anestesiología">Anestesiología</option>
            <option value="Odontología">Odontología</option>
            <option value="Hematología">Hematología</option>
            <option value="Nefrología">Nefrología</option>
        </select>
        
        <div class="service" id="Cirugía">
            <h3><a href="#Cirugia">Cirugía</a></h3>
            <img src="cirugia.jpg" alt="Cirugía">
            <p>Realización de procedimientos quirúrgicos, como cirugía abdominal, ortopedia, cirugía cardíaca, etc. Contamos con un equipo de cirujanos altamente calificados.</p>
        </div>
        
        <div class="service" id="Pediatría">
            <h3><a href="#Pediatría">Pediatría</a></h3>
            <img src="pediatria.jpeg" alt="Pediatría">
            <p>Atención médica especializada para niños y adolescentes. Nuestros pediatras se dedican al cuidado de la salud infantil.</p>
        </div>
        
        <div class="service" id="Ginecología">
            <h3><a href="#Ginecologia">Ginecología y Obstetricia</a></h3>
            <img src="ginecologia.jpeg" alt="Ginecología y Obstetricia">
            <p>Cuidado de la salud de las mujeres, incluido el parto y el embarazo. Nuestros ginecólogos brindan atención integral a las mujeres de todas las edades.</p>
        </div>
        
        <div class="service" id="Neurología">
            <h3><a href="#Neurologia">Neurología</a></h3>
            <img src="neurologia.jpeg" alt="Neurología">
            <p>Diagnóstico y tratamiento de enfermedades del sistema nervioso. Nuestros neurólogos están especializados en el cuidado de pacientes con afecciones neurológicas.</p>
        </div>
        
        <div class="service" id="Cardiología">
            <h3><a href="#Cardiologia">Cardiología</a></h3>
            <img src="cardiologia.png" alt="Cardiología">
            <p>Diagnóstico y tratamiento de enfermedades cardíacas. Nuestros cardiólogos son expertos en el cuidado del corazón y la salud cardiovascular.</p>
        </div>
        
        <div class="service" id="Oftalmología">
            <h3><a href="#Oftalmologia">Oftalmología</a></h3>
            <img src="oftalmologia.jpeg" alt="Oftalmología">
            <p>Atención de problemas oculares y cirugía ocular. Nuestros oftalmólogos se dedican a preservar la salud visual y mejorar la vista de nuestros pacientes.</p>
        </div>
        
        <div class="service" id="Otorrinolaringología">
            <h3><a href="#Otorrinolaringologia">Otorrinolaringología (ORL)</a></h3>
            <img src="orl.jpeg" alt="Otorrinolaringología">
            <p>Tratamiento de problemas del oído, nariz y garganta. Nuestros especialistas en ORL abordan afecciones relacionadas con la audición y la respiración.</p>
        </div>
        
        <div class="service" id="Dermatología">
            <h3><a href="#Dermatologia">Dermatología</a></h3>
            <img src="dermatologia.jpeg" alt="Dermatología">
            <p>Cuidado de la piel, cabello y uñas, incluyendo cirugía dermatológica. Nuestros dermatólogos ayudan a mantener la salud de la piel de nuestros pacientes.</p>
        </div>
        
        <div class="service" id="Radiología">
            <h3><a href="#Radiologia">Radiología</a></h3>
            <img src="radiologia.jpeg" alt="Radiología">
            <p>Diagnóstico por imágenes, como radiografías, tomografías computarizadas y resonancias magnéticas. Nuestros radiólogos interpretan imágenes médicas para diagnóstico.</p>
        </div>
        
        <div class="service" id="Laboratorio">
            <h3><a href="#Laboratorio">Laboratorio Clínico</a></h3>
            <img src="laboratorio.jpeg" alt="Laboratorio Clínico">
            <p>Análisis de muestras biológicas para diagnóstico. Nuestro laboratorio clínico realiza pruebas precisas para ayudar en el diagnóstico de enfermedades.</p>
        </div>
        
        <div class="service" id="Farmacia">
            <h3><a href="#Farmacia">Farmacia</a></h3>
            <img src="farmacia.jpeg" alt="Farmacia">
            <p>Dispensación de medicamentos y asesoramiento farmacéutico. Nuestra farmacia garantiza que los pacientes reciban los medicamentos necesarios y la información adecuada.</p>
        </div>
        
        <div class="service" id="CuidadosIntensivos">
            <h3><a href="#CuidadosIntensivos">Cuidados Intensivos (UCI)</a></h3>
            <img src="uci.jpeg" alt="Cuidados Intensivos">
            <p>Atención a pacientes críticos que requieren monitoreo constante. Nuestra UCI está equipada para brindar cuidados especializados a quienes más lo necesitan.</p>
        </div>
        
        <div class="service" id="Traumatología">
            <h3><a href="#Traumatologia">Traumatología</a></h3>
            <img src="traumatologia.jpeg" alt="Traumatología">
            <p>Tratamiento de lesiones traumáticas y fracturas. Nuestros traumatólogos se dedican a la recuperación de pacientes con lesiones musculoesqueléticas.</p>
        </div>
        
        <div class="service" id="Psiquiatría">
            <h3><a href="#Psiquiatria">Psiquiatría</a></h3>
            <img src="psiquiatria.jpeg" alt="Psiquiatría">
            <p>Diagnóstico y tratamiento de trastornos mentales. Nuestros psiquiatras brindan apoyo a pacientes con problemas de salud mental y emocional.</p>
        </div>
        
        <div class="service" id="Rehabilitación">
            <h3><a href="#Rehabilitacion">Rehabilitación</a></h3>
            <img src="rehabilitacion.jpeg" alt="Rehabilitación">
            <p>Terapia física y ocupacional para la recuperación de pacientes. Nuestros especialistas en rehabilitación ayudan en la recuperación funcional.</p>
        </div>
        
        <div class="service" id="CuidadosPaliativos">
            <h3><a href="#CuidadosPaliativos">Cuidados Paliativos</a></h3>
            <img src="paliativos.jpeg" alt="Cuidados Paliativos">
            <p>Atención a pacientes con enfermedades terminales para mejorar su calidad de vida. Nuestro equipo de cuidados paliativos brinda apoyo compasivo a pacientes y familias.</p>
        </div>
        
        <div class="service" id="NutriciónDietética">
            <h3><a href="#NutricionDietetica">Nutrición y Dietética</a></h3>
            <img src="nutricion.jpeg" alt="Nutrición y Dietética">
            <p>Planificación de dietas y atención nutricional. Nuestros dietistas trabajan en conjunto con los pacientes para promover una alimentación saludable.</p>
        </div>
        
        <div class="service" id="ServiciosSociales">
            <h3><a href="#ServiciosSociales">Servicios Sociales</a></h3>
            <img src="servicios_sociales.jpeg" alt="Servicios Sociales">
            <p>Apoyo social y ayuda con cuestiones legales y sociales. Nuestros trabajadores sociales brindan apoyo integral a los pacientes y sus familias.</p>
        </div>
        
        <div class="service" id="Imagenología">
            <h3><a href="#Imagenologia">Imagenología</a></h3>
            <img src="imagenologia.jpeg" alt="Imagenología">
            <p>Interpretación de imágenes médicas. Nuestros especialistas en imagenología ayudan en el diagnóstico a través de imágenes avanzadas.</p>
        </div>
        
        <div class="service" id="Endoscopia">
            <h3><a href="#Endoscopia">Endoscopia</a></h3>
            <img src="endoscopia.jpeg" alt="Endoscopia">
            <p>Procedimientos diagnósticos y terapéuticos utilizando endoscopios. Nuestra unidad de endoscopia realiza procedimientos seguros y precisos.</p>
        </div>
        
        <div class="service" id="Anestesiología">
            <h3><a href="#Anestesiologia">Anestesiología</a></h3>
            <img src="anestesiologia.jpeg" alt="Anestesiología">
            <p>Administración de anestesia durante procedimientos quirúrgicos. Nuestros anestesiólogos garantizan la comodidad y seguridad de los pacientes durante la cirugía.</p>
        </div>
        
        <div class="service" id="Odontología">
            <h3><a href="#Odontologia">Odontología</a></h3>
            <img src="odontologia.jpeg" alt="Odontología">
            <p>Atención dental y procedimientos dentales. Nuestros dentistas cuidan de la salud bucal de nuestros pacientes.</p>
        </div>
        
        <div class="service" id="Hematología">
            <h3><a href="#Hematologia">Hematología</a></h3>
            <img src="hematologia.jpeg" alt="Hematología">
            <p>Diagnóstico y tratamiento de trastornos de la sangre. Nuestros hematólogos se especializan en afecciones sanguíneas.</p>
        </div>
        
        <div class="service" id="Nefrología">
            <h3><a href="#Nefrologia">Nefrología</a></h3>
            <img src="nefrologia.jpeg" alt="Nefrología">
            <p>Atención a pacientes con enfermedades renales. Nuestros nefrólogos se dedican al cuidado de los riñones y la salud renal.</p>
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
