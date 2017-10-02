<?php
  try{    
    $connect = mysqli_connect("127.0.0.1", "root", "Roberto1",'plazametropoli');    
  }catch(Exception $e){
    echo "error";
    /*header("location:login.php?message=Error en base de datos");*/
  }
        
  if (!$connect) {
    die('No pudo conectarse: ' . mysql_error());
    //header("location:login.php?message='Conexion a la base de datos no exitosa'");
  }
  if(isset($_POST['button'])) {
    $but = $_POST['button'];
    /*echo $but;*/
    mysqli_close($connect);
  }else{
    mysqli_close($connect);
    /*header("location:login.php");*/
  }

?>