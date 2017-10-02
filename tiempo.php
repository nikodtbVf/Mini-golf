<!DOCTYPE html>
<html>
    <head>
        <title>
            Tiempos
        </title>

      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <link rel="stylesheet" media="screen and (min-device-width: 500px)" href="./css/styles.css" />
    </head>
    <body >
      <?php 
        session_start();
        if (!isset($_SESSION['user'])) {
          session_destroy();
          header("location:login.php?message=3");
         }elseif (isset($_POST['button'])){
            $but = $_POST['button'];
            echo $but;
         }else{
          header("location:tablero.php");
         }
    ?>
      <div class="contenedormaster">
        <div id="header">
          <ul class="nav">
            <li style="float: right;"><a href="logout.php">Salir</a></li>
          </ul>
        </div>
          <!--<div class = "encabezado">
            <div class="imnombre">
              <img class="plazaimg" src="Images/plaza.png">
            </div>
              <div class= "logout">
                <form  action="logout.php" method="POST">
                  <button class="logoutbtn" name="button" >SALIR</button>
                </form>
              </div>
          </div>-->

        <form action="tablero.php" method="POST">
          <div class="margen-20">
              <button class="botontime" name="buttonback" value="boton1"><img class="button60" src="Images/boton60.png"></button>
              <button class="botontime" name="buttonback" value="boton2"><img class="button45" src="Images/boton45.png"></button>
              <button class="botontime" name="buttonback" value="boton3"><img class="button30" src="Images/boton30.png"></button>
          </div>
        </form>    
        <form action="tablero.php" method="POST">
            <button  class="botonback" name="buttonback" value="atras"><img class="imageback" src="Images/atras.png"></button>
        </form>
         
    </body>
</html>