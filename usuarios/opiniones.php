    <main class="insertar">
    <h1>Ingresa tu nombre y dejanos tu opinión</h1>
    <form action = "insertar_datos.php" method="POST">
        <div class= "nombre">
            <label >Nombre y apellido</label>
            <input type="text" maxlength="1000" name= "nom_ape" placeholder="Nombre y apellido" required>
        </div>
          
        <div class= "opinion">
            <label >Opinion</label>
            <input type="text" maxlength="1000"  name= "opinion" placeholder="Opinion" required>
        </div>
        <div>
            <button type="submit"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Enviar</button>
        </div>
    </main> 

    <h1>Caja de opiniones</h1>
    <?php
			include ("conexion.php");
			$datos_bd = mysqli_connect("localhost","root","","tres_pibesalpe") or exit ("No se puede conectar con la Base de datos");
			$consulta= mysqli_query($datos_bd,"SELECT  * FROM opi_usuarios");
			while ($lista_consulta= mysqli_fetch_assoc($consulta) ){
					
				?>
				<div class="consultas">
					<ul>
                        <li><?php echo $lista_consulta["nom_ape"];?></li>
					    <li><?php echo $lista_consulta["opinion"];?></li>
				    </ul>
			    </div>
				<?php
					}
		?>

