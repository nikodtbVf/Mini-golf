<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
    <title>LOGIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="./css/styles.css" />
</head>

<body>
  <div class="login">
  <h1>ENTRAR</h1>
    <form action="conectar.php" method="POST" autocomplete="off">
    	<input type="text" class="entrada" name="usuario" placeholder="Usuario" required="required" />
        <input type="password" class="entrada" name="contrasenia" placeholder="Contraseña" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Acceso</button>
    </form>
    <?php
        session_start();
   		if (isset($_GET['message'])) {
        	$mensaje = $_GET['message'];
            if($mensaje == '1'){
                echo "<br/><div class='alert alert-dismissible alert-danger'><strong>¡Error!</strong> las credenciales son incorrectas.</div>";
                //echo "<p><span style='color:#ff0000'>Datos erroneos,vuleva a intentar</span></p>";                                   
            }elseif ($mensaje == '2') {
                echo "<br/><div class='alert alert-dismissible alert-danger'>¡Error!</strong>no conexión base de datos, consulte un administrador.</div>";
                //echo "<p><span style='color:#ff0000'>No conexión base de datos, consulte un administrador</span></p>";
            }elseif ($mensaje == '3') {
                echo "<br/><div class='alert alert-dismissible alert-danger'>Inicie sesión primero.</div>";
                //echo "<p><span style='color:#ff0000'>Inicie sesión primero</span></p>";
            }else{
                echo "<br/><div class='alert alert-dismissible alert-danger'>Opción no encontrada.</div>";
                //echo "<p><span style='color:#ff0000'>Opción no encontrada</span></p>";
            }
            if (isset($_SESSION['user'])) {
                session_destroy();}
        }elseif (isset($_SESSION['user'])) {
            session_destroy();}
    ?>
</div>
  
    <!--<script src="js/index.js"></script>-->

</body>
</html>
