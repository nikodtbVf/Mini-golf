<!DOCTYPE html>
<html lang="es">
<head>
    <title>LOGIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" media="screen and (min-device-width: 500px)" href="./css/font.css" />
    <link rel='stylesheet' media='screen and (max-width: 499px)' href="./css/medium.css" />

    <script type="text/javascript">
        function nobackbutton(){
            window.location.hash="no-back-button";
            window.location.hash="Again-No-back-button" //chrome    
            window.onhashchange=function(){window.location.hash="no-back-button";}
        }
    </script>
</head>
 
<body onload="nobackbutton();">
    <div class="contenedormaster">
        <div class = "encabezado">
            <img class="fondo" src="fondo.jpg">
            <img class="imfondo" src="plaza.png">
        </div>
        <div class="envoltura">
            <div class="contenedor">    
                <div class="cabecera" >
                </div>        
                <div class="cuerpo">
                    <form id="form-login" action="index.php" method="POST" autocomplete="off">
                        <p class="margen"><label >Usuario</label></p>
                        <p class="margen"><input name="usuario" type="text" id="usuario" placeholder="Ingresa Usuario" autofocus="" required=""></p>
                        <p class="margen"><label>Contraseña</label></p>
                        <p class="margen"><input name="contrasenia" type="password" id="contrasenia" placeholder="Ingresa Password" required=""></p>
                        <div class="center">
                            <p><input type="submit" id="submit" name="submit" value="Ingresar" class="botonsubmit"></p>
                        </div>
                    </form>
                        
                    <?php
                        if (isset($_GET['message'])) {
                            $mensaje = $_GET['message'];
                            echo "<p><span style='color:#ff0000'>".$mensaje."</span></p>";                               
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>  
</body>
 
</html>