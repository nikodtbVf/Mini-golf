<?php
    try{    
        $connect = mysqli_connect("127.0.0.1", "root", "Roberto1",'plazametropoli');   
                
        if (!$connect) {
            header("location:login.php?message=2");
           }

        if (isset($_POST['nombre']) && isset($_POST['contrasenia1'])&& isset($_POST['contrasenia2'])&& isset($_POST['apellido'])&& isset($_POST['usuario'])){
           	$usuario = $_POST['usuario'];
            $contrasenia1 = $_POST['contrasenia1'];
            $contrasenia2 = $_POST['contrasenia2'];
            $apellido = $_POST['apellido'];
            $nombre = $_POST['nombre'];
            if ($contrasenia1 != $contrasenia2){
            	header("location:registrar.php?message=1"); 
            }

            $sql = "INSERT INTO empleados (NombreEmpleado,ApellidoEmpleado,UsuarioEmpleado,ContraseniaEmpleado) VALUES 
            (?,?,?,?)";
            $sentencia = mysqli_prepare($connect,$sql);
			mysqli_stmt_bind_param($sentencia,"ssss",$nombre,$apellido,$usuario,$contrasenia1);
			mysqli_stmt_execute($sentencia);
            mysqli_close($connect);
            header("location:registrar.php?message=2");

        }elseif(isset($_POST['buttonback'])) {
            mysqli_close($connect);
        }else{
            mysqli_close($connect);
            /*header("location:login.php?message=3");} */
            echo "No guardado";}
    }catch(Exception $e){
        header("location:login.php?message=2");}

?>