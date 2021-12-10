<?php
if (isset($_POST['Paletas'])){ //Paletas
    
    $paletas = [];

    if (!empty($_POST['Paleta_Chocolate'])) { // Paleta Chocolate
        $datos = $_POST['Paleta_Chocolate'];
        $precio = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos))-1], '$'));
        $nombre = "Paleta/Chocolate_Fresa";
        $cantidad = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos)) -5], '$'));
        
        $sabores = [
            'nombre' => $nombre,
            'precio' => $precio,
            'cantidad' => $cantidad
        ];
<<<<<<< HEAD
        $paletas[5] = $sabores;
    }if($_POST['Paleta_Fresa'] != "-1"){
        $datos = $_POST['Paleta_Fresa'];
        $precio = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos))-1], '$'));
        $nombre = ltrim(explode(" ", $datos)[count(explode(" ", $datos))-2], ':');
        $cantidad = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos)) -5], '$'));
        
=======
        $paletas[] = $sabores;
    }

      if (!empty($_POST['Paleta_Fresa']))) { // Paleta Fresa
        $datos = $_POST['Paleta_Fresa'];
        $precio = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos))-1], '$'));
        $nombre = "Paleta/Fresa";
        $cantidad = intval(explode(" ", $datos)[0]);
<<<<<<< HEAD

=======
        echo "<pre>";
        echo $precio;
        echo $cantidad;
        echo "<pre>";
        echo "<br>".$datos."> Aqui";
>>>>>>> 464a02be961cdc51062c1dd173721c9691b88b10
>>>>>>> 72837c00e3ba8d1b7bcc44702351756591f71688
        $sabores = [
            'nombre' => $nombre,
            'precio' => $precio,
            'cantidad' => $cantidad
        ];
<<<<<<< HEAD
        $paletas[0] = $sabores;
=======
        $paletas[] = $sabores;
    }

    foreach ($paletas as $paleta) {
        include 'database.php';
        $madarConsulta = mysqli_query($conectionSQL, "INSERT INTO ventas VALUES(null, '".$paleta['nombre']."', ".$paleta['cantidad'].", ".$paleta['precio'].");");
        // Por si hay error cierra la conexion   
        if($madarConsulta == false){
            die(mysqli_error($conectionSQL));
            echo "Error";
        }
>>>>>>> 464a02be961cdc51062c1dd173721c9691b88b10
    }

    header("Location:../Paletas.html");
}

if (isset($_POST['Helados'])){ //Helados
    
    
}

if (isset($_POST[''])){ //Helados/Conos
    
    
}

if (isset($_POST[''])){ //Frituras
    
    
}

if (isset($_POST[''])){ //Bebidas
    
    
}

