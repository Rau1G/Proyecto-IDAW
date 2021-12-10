<?php
if(isset($_POST['login'])){
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $correo = $_POST['correo'];
    

    include '../../../php/database.php';
    
    $query = $conectionSQL-> prepare("SELECT * FROM usuarios WHERE Correo =".$correo);
   // $query->bindParam("correo", $correo, PDO::PARAM_STR);
    $query -> execute();

    $resultado = $query -> fetch(PDO::FETCH_ASSOC);
    echo var_dump($resultado);
    if(!$resultado){
        echo"Error";
    }else{
        if(password_verify($password, $resultado['Contraseña'])){
            header("Location: ../../panel");
        }
    }

}