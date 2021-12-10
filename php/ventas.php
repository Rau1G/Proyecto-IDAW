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
        $paletas[] = $sabores;
    }

      if (!empty($_POST['Paleta_Fresa'])) { // Paleta Fresa
        $datos = $_POST['Paleta_Fresa'];
        $precio = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos))-1], '$'));
        $nombre = "Paleta/Fresa";
        $cantidad = intval(explode(" ", $datos)[0]);
        $sabores = [
            'nombre' => $nombre,
            'precio' => $precio,
            'cantidad' => $cantidad
        ];
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
    }

    header("Location:../Paletas.html");
}


if (isset($_POST['ConosHelados'])){ //Helados/Conos
    $conos = [];

    if (!empty($_POST['Helado_Cono_Vainilla'])) { // Cono Vainilla
        $datos = $_POST['Helado_Cono_Vainilla'];
        $precio = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos))-1], '$'));
        $nombre = "Helado Cono/Vainilla";
        $cantidad = intval(explode(" ", $datos)[0]);
        $sabores = [
            'nombre' => $nombre,
            'precio' => $precio,
            'cantidad' => $cantidad
        ];
        $conos[] = $sabores;
    }

    if (!empty($_POST['Helado_Cono_Fresa'])) { // Cono Fresa
        $datos = $_POST['Helado_Cono_Fresa'];
        $precio = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos))-1], '$'));
        $nombre = "Helado Cono/Fresa";
        $cantidad = intval(explode(" ", $datos)[0]);
        $sabores = [
            'nombre' => $nombre,
            'precio' => $precio,
            'cantidad' => $cantidad
        ];
        $conos[] = $sabores;
    }

    if (!empty($_POST['Helado_Cono_Chocolate'])) { // Cono Chocolate
        $datos = $_POST['Helado_Cono_Chocolate'];
        $precio = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos))-1], '$'));
        $nombre = "Helado Cono/Chocolate";
        $cantidad = intval(explode(" ", $datos)[0]);
        $sabores = [
            'nombre' => $nombre,
            'precio' => $precio,
            'cantidad' => $cantidad
        ];
        $conos[] = $sabores;
    }

    foreach ($conos as $cono) {
        include 'database.php';
        $madarConsulta = mysqli_query($conectionSQL, "INSERT INTO ventas VALUES(null, '".$cono['nombre']."', ".$cono['cantidad'].", ".$cono['precio'].");");
        // Por si hay error cierra la conexion   
        if($madarConsulta == false){
            die(mysqli_error($conectionSQL));
            echo "Error";
        }
    }

    header("Location:../ConoHel.html");
}


