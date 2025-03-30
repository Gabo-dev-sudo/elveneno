<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
</head>
<body>
    <form method="post" >

       <h2>hola</h2>
       <p>inicia tu registro</p>

        <div class="login">
            <input type="text" name="usuario" placeholder="usuario">
        </div>

        <div class="login">
            <input type="email" name="email" placeholder="email">
        </div>

        <div class="login">
            <input type="password" name="contraseña" placeholder="contraseña">
        </div>


        <input type="submit" name="registrador" value="enviar" class="btn">
    <form>

    <?php
        include("registrar.php");
    ?>

</body>
</html>