<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
    <title>FORMULARIO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="./css/for.css" />
    <link rel="stylesheet" href="./css/styles.css" />

</head>
<body>
	<?php 
		session_start();
		if (!isset($_SESSION['user'])) {
			session_destroy();
			header("location:login.php?message=3");
		 }else{
		 	$user = $_SESSION['user'];
		 	if($user != "admin"){
				header("location:tablero.php");
		 	}
		 }
	?>
		<div id="header">
			<ul class="nav">
				<li><a href="tablero.php">Inicio</a></li>
				<li><a href="">Empleados</a>
					<ul>
						<li><a href="registrar.php">Registrar</a></li>
						<li><a href="">Modificar</a></li>
						<li><a href="">Eliminar</a></li>
					</ul>
				</li>
				<li style="float: right;"><a href="logout.php">Salir</a></li>
			</ul>
		</div>
<div id="contact-form">
	<div>
		<h1>Cambiar contraseña</h1> 
	</div>
	<form method="post" action="guardarpassd.php" name="formulario">
		<div>
		      <label for="user">
		      	<span class="required">Usuario:</span>
		      	<input type="text" id="user" name="usuario" value="" placeholder="Usuario" tabindex="2" required="required" />
		      </label>  
		</div>
		<div>
		      <label for="pssd">
		      	<span class="required">Contraseña:</span>
		      	<input type="password" id="pssd" name="contrasenia1" value="" maxlength=8 placeholder="Contraseña" tabindex="2" required="required" />
		      </label>  
		</div>  
		<div>
		      <label for="pssd">
		      	<span class="required">Contraseña:</span>
		      	<input type="password" id="pssd" name="contrasenia2" value="" maxlength=8 placeholder="Repita contraseña" tabindex="2" required="required" />
		      </label>  
		</div>           
		      <button name="submit" type="submit" id="submit"  onclick="validar_clave()" >Guardar</button> 
	</form>
		   	<?php
		   		if (isset($_GET['message'])) {
		        	$mensaje = $_GET['message'];
		            if($mensaje == '1'){
		                echo "<span style='color:#ff0000'>Contraseñas no son iguales</span>";                                   
		            }elseif ($mensaje == '2') {
		            	echo "<p><span class ='required'>Datos guardados correctamente</span></p>";
		            }elseif ($mensaje == '3') {
		            	echo "<p><span style='color:#ff0000'>Inicie sesión primero</span></p>";}
		            }elseif ($mensaje == '4') {
		            	echo "<p><span style='color:#ff0000'>Usuario no existe</span></p>";}
	        	}
    		?>

</div>
</body>