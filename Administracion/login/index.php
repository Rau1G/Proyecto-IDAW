<?php 
     // Autenticar el usuario
     include '../../php/database.php';
     $errores = [];

     if($_SERVER['REQUEST_METHOD'] === 'POST') {
         $email = mysqli_real_escape_string($conectionSQL,  filter_var( $_POST['correo'], FILTER_VALIDATE_EMAIL) );
         $password = mysqli_real_escape_string($conectionSQL,  $_POST['password']);
 
         if(!$email) {
             $errores[] = "El email es obligatorio o no es válido";
         }
 
         if(!$password) {
             $errores[] = "El Password es obligatorio";
         }
 
         if(empty($errores)) {
 
             // Revisar si el usuario existe.
             $query = "SELECT * FROM usuarios WHERE Correo = '${email}' ";
             $resultado = mysqli_query($conectionSQL, $query);

             if( $resultado->num_rows ) {
                 // Revisar si el password es correcto
                 $usuario = mysqli_fetch_assoc($resultado);

                 
                 // Verificar si el password es correcto o no
 
                 $auth = password_verify($password, $usuario['Contraseña']);
 
                 if($auth) {
                     // El usuario esta autenticado
                     session_start();
 
                     // Llenar el arreglo de la sesión
                     $_SESSION['usuario'] = $usuario['nombre'];
                     $_SESSION['login'] = true;
 
                    
                     header('Location: ../panel/');
 
                 } else {
                     $errores[] = 'El password es incorrecto';
                 }
             } else {
                 $errores[] = "El Usuario no existe";
            }
        }
 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/main.css"/>
</head>
<body class="body-login">
    <div class="login-box">
        <img class="avatar" src="img/logoHelado.png" alt="logo heladeria">
        <h1>Inicia sesión</h1>

        <form method="post">
            <!-- USERNAME -->
            <label for="correo">Correo</label>
            <input type="email" placeholder="Usuario" name="correo"></input>

            <!-- PASSWORD -->
            <label for="password">Contraseña</label>
            <input type="password" name= "password" placeholder="Usuario"></input>

            <input type="submit" name="login" value="Iniciar sesion">


            <a href="#">¿Perdiste tu contraseña?</a>
            <a href="register.html">¿No tienes cuenta?</a>
        </form>
    </div>
</body>
</html>