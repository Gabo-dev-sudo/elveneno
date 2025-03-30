<?php
   
    include("conexion.php");

    if(isset($_POST['registrador'])){
        if(
          strlen($_POST['usuario']) >=1 &&
          strlen($_POST['email']) >=1 &&
          strlen($_POST['contraseña']) >=1
          ){
              
                $usuario= trim($_POST['usuario']);
                $email= trim($_POST['email']);
                $contraseña= trim($_POST['contraseña']);
                $consulta= "INSERT INTO login1(usuario,email,contraseña)VALUES('$usuario', '$email', '$contraseña')";
                $resultado= mysqli_query($conexion, $consulta); 
                if($resultado){
                 ?>
                    <h3 class="success">tu registro fue exitoso</h3>
                 <?php
                }else{
                 ?>
                    <h3 class="error">ocurrio un error</h3>
                 <?php
                }
            }else{
                ?>
                    <h3 class="error">llena todos los campos</h3>
                <?php
            }
    }


?>