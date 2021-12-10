<?php
if (isset($_POST['Paletas'])){ //Paletas
    $paletas = [];

    if ($_POST['Paleta_Chocolate'] != "-1") { // Paleta Chocolate
        $datos = $_POST['Paleta_Chocolate'];
        $precio = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos))-1], '$'));
        $nombre = ltrim(explode(" ", $datos)[count(explode(" ", $datos))-2], ':');
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

      if ($_POST['Paleta_Fresa'] != "-1") { // Paleta Fresa
        $datos = $_POST['Paleta_Fresa'];
        $precio = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos))-1], '$'));
        $nombre = "Paleta/Fresa";
        $cantidad = intval(explode(" ", $datos)[0]);
        echo "<pre>";
        echo $precio;
        echo $cantidad;
        echo "<pre>";
        echo "<br>".$datos."> Aqui";
>>>>>>> 464a02be961cdc51062c1dd173721c9691b88b10
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
}

if (isset($_POST['Helados'])){ //Helados
    
    
}

if (isset($_POST[''])){ //Helados/Conos
    
    
}

if (isset($_POST[''])){ //Frituras
    
    
}

if (isset($_POST[''])){ //Bebidas
    
    
}

