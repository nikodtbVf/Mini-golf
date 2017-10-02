<?php
    try{      
        $connect = mysqli_connect("127.0.0.1", "root", "Roberto1",'plazametropoli');   
                
        if (!$connect) {
            header("location:login.php?message=2");
           }

        if (isset($_POST['usuario']) && isset($_POST['contrasenia'])){
            $usuario = $_POST['usuario'];
            $contrasenia = $_POST['contrasenia'];

            $sql = "SELECT UsuarioEmpleado,ContraseniaEmpleado FROM empleados WHERE UsuarioEmpleado=? 
                AND ContraseniaEmpleado=?";
            $sentencia = mysqli_prepare($connect,$sql);
            mysqli_stmt_bind_param($sentencia,"ss",$usuario,$contrasenia);

            mysqli_stmt_execute($sentencia);
            mysqli_stmt_bind_result($sentencia, $col1, $col2);
            while (mysqli_stmt_fetch($sentencia)) {
                $finaluser = $col1;
                $finalpwd = $col2;
                }

            echo $finaluser;
            echo $finalpwd;
            if ($finaluser != $usuario and $finalpwd != $contrasenia){
                session_destroy();
                header("location:login.php?message=1");
            }
            elseif ($finaluser == $usuario and $finalpwd == $contrasenia){
                session_start();
                $_SESSION['user'] =  $usuario; 
                mysqli_stmt_close($sentencia);
                mysqli_close($connect);
                header("location:tablero.php");
            }

        }else{
            mysqli_close($connect);
            header("location:login.php?message=3");} 
    }catch(Exception $e){
        header("location:login.php?message=2");}

?>