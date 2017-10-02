<html>
	<head>
		<title>Menu Desplegable</title>
		<!--<link rel="stylesheet" media="screen and (min-device-width: 500px)" href="./css/styles.css" />-->
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="./css/styles.css" />
		<style type="text/css">
			

			
			
		</style>
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
				<li><a href="menu.php">Inicio</a></li>
				<li><a href="">Empleados</a>
					<ul>
						<li><a href="registrar.php">Registrar</a></li>
						<li><a href="">Modificar</a></li>
						<li><a href="">Eliminar</a></li>
					</ul>
				</li>
				<li><a href=""></a></li>
				<li><a href="">Contacto</a></li>
				<li style="float: right;"><a href="logout.php">Salir</a></li>
			</ul>
		</div>
	</body>
</html>