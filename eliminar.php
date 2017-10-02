<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
    <title>FORMULARIO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="./css/for.css" />
    <link rel="stylesheet" href="./css/styles.css" />
    <script type="text/javascript">
        function nobackbutton(){
            window.location.hash="no-back-button";
            window.location.hash="Again-No-back-button" //chrome    
            window.onhashchange=function(){window.location.hash="no-back-button";}         }

		function validar_clave() {
			var caract_invalido = " ";
			var caract_longitud = 8;
			var cla1 = document.formulario.contrasenia1.value;
			var cla2 = document.formulario.contrasenia2.value;
			if (cla1 == '' || cla2 == '') {
				alert('Debes introducir tu clave en los dos campos.');
				return false;
			}
			if (document.mi_formulario.mi_clave.value.length < caract_longitud) {
				alert('Tu clave debe constar de ' + caract_longitud + ' caracteres.');
				return false;
			}
			if (document.mi_formulario.mi_clave.value.indexOf(caract_invalido) > -1) {
				alert("Las claves no pueden contener espacios");
				return false;
			}
			else {
				if (cla1 != cla2) {
				alert ("Las claves introducidas no son iguales");
				return false;
			}
			else {
				alert('Contraeña correcta');
				return true;
      		}
	   }
	}
</script>



    </script>
</head>
<body onload="nobackbutton();">
		<div id="header">
			<ul class="nav">
				<li><a href="login.php">Inicio</a></li>
				<li><a href="">Empleados</a>
					<ul>
						<li><a href="formulario.php">Registrar</a></li>
						<li><a href="">Modificar</a></li>
						<li><a href="">Eliminar</a></li>
					</ul>
				</li>
				<li><a href=""></a></li>
				<li><a href="">Contacto</a></li>
				<li style="float: right;"><a href="logout.php">Salir</a></li>
			</ul>
		</div>
<div id="contact-form">
	<div>
		<h1>Datos empleado</h1> 
	</div>

		   <form method="post" name="formulario">
			<div>
		      <label for="name">
		      	<span class="required">Nombre: *</span> 
		      	<input type="text" id="name" name="name" value="" placeholder="Nombre" required="required" tabindex="1" autofocus="autofocus" />
		      </label> 
			</div>
			<div>
		      <label for="lastname">
		      	<span class="required">Apellido: *</span> 
		      	<input type="text" id="lastname" name="apellido" value="" placeholder="Apellido" required="required" tabindex="1" autofocus="autofocus" />
		      </label> 
			</div>
			<div>
		      <label for="user">
		      	<span class="required">Usuario: *</span>
		      	<input type="text" id="user" name="usuario" value="" placeholder="Usuario" tabindex="2" required="required" />
		      </label>  
			</div>
			<div>
		      <label for="pssd">
		      	<span class="required">Contraseña: *</span>
		      	<input type="password" id="pssd" name="contrasenia1" value="" maxlength=8 placeholder="Contraseña" tabindex="2" required="required" />
		      </label>  
			</div>  
			<div>
		      <label for="pssd">
		      	<span class="required">Contraseña: *</span>
		      	<input type="password" id="pssd" name="contrasenia2" value="" maxlength=8 placeholder="Repita contraseña" tabindex="2" required="required" />
		      </label>  
			</div>           
		      <button name="submit" type="submit" id="submit"  onclick="validar_clave()" >Guardar</button> 
			</div>
		   </form>

	</div>
</body>