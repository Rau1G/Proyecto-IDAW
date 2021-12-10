<?php
if(isset($_POST['Registro'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $correo = $_POST['correo'];
    echo $nombre. "<br>". $apellido ."<br>". $password. "<br>". $correo;

    include '../../../php/database.php';
    $madarConsulta = mysqli_query($conectionSQL, "INSERT INTO usuarios VALUES(null, '".$correo."', '".$nombre."', '".$apellido."','".$password."');");
    header("Location: ../index.html");
    // Por si hay error cierra la conexion
    if($madarConsulta == false){
        die(mysqli_error($conectionSQL));
        echo "Error";
    }


}
