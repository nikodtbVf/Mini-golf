<!DOCTYPE html>
<html>
    <head>     
    	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="./css/styles.css" />

    </head>
    <body>
    	<div class="contenedormaster">
    	<?php 
			session_start();
			if (!isset($_SESSION['user'])) {
				session_destroy();
				header("location:login.php?message=3");
			 }

		 	$user = $_SESSION['user'];
		 	if($user != "admin"){
		 	?>



    		<div id="header">
				<ul class="nav">
					<li style="float: right;"><a href="logout.php">Salir</a></li>
				</ul>
			</div>
			<?php 
		 		}else{


			 ?>


			<div id="header">
				<ul class="nav">
					<li><a href="tablero.php">Inicio</a></li>
					<li><a href="">Empleados</a>
						<ul>
							<li><a href="registrar.php">Registrar</a></li>
							<li><a href="modificar.php">Modificar</a></li>
							<li><a href="">Eliminar</a></li>
						</ul>
					</li>
					<li><a href=""></a></li>
					<li><a href="">Contacto</a></li>
					<li style="float: right;"><a href="logout.php">Salir</a></li>
				</ul>
			</div>
			<?php 
				}
			 ?>



	        <!--<div class = "encabezado">
	        	<div class="imnombre">
	        		<img class="plazaimg" src="Images/plaza.png">
	        	</div>
	        </div>-->

		    <div class = "centernum">
		    	<form  action="tiempo.php" method="POST">
			        <div class="margen-10">
			        	<button class="botonnum" name="button" value="1"><img class="imagenum" src="Images/uno.png" onmouseover="this.src='Images/mercedes.png';" onmouseout="this.src='Images/uno.png';"/></button>
			            <button class="botonnum" name="button" value="2"><img class="imagenum" src="Images/dos.png" /></button>
			            <button class="botonnum" name="button" value="3"><img class="imagenum" src="Images/tres.png" /></button>
			            <button class="botonnum" name="button" value="4"><img class="imagenum" src="Images/cuatro.png"/></button>
			        </div>
			         <div class="margen-10">
			        	<button class="botonnum" name="button" value="5"><img class="imagenum" src="Images/cinco.png"/></button>
			            <button class="botonnum" name="button" value="6"><img class="imagenum" src="Images/seis.png" /></button>
			            <button class="botonnum" name="button" value="7"><img class="imagenum" src="Images/siete.png"/></button>
			            <button class="botonnum" name="button" value="8"><img class="imagenum" src="Images/ocho.png" /></button>           
			        </div>
			        <div class="margen-10">
			        	<button class="botonnum" name="button" value="9"><img class="imagenum" src="Images/nueve.png" /></button>
			            <button class="botonnum" name="button" value="10"><img class="imagenum" src="Images/diez.png" /></button>
			            <button class="botonnum" name="button" value="11"><img class="imagenum" src="Images/once.png" /></button>
			            <button class="botonnum" name="button" value="12"><img class="imagenum" src="Images/doce.png" /></button> 
			        </div>
			        <div class="margen-10">
			            <button class="botonnum" name="button" value="13"><img class="imagenum" src="Images/trece.png" /></button>
			            <button class="botonnum" name="button" value="14"><img class="imagenum" src="Images/catorce.png"/></button> 
			        </div>
			    </form>
			</div>
        </div>
    </body>
</html>