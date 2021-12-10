<?php
if (isset($_POST['Paletas'])){ //Paletas
    
    $paletas = [];

    if (!empty($_POST['Paleta_Chocolate'])) { // Paleta Chocolate
        $datos = $_POST['Paleta_Chocolate'];
        $precio = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos))-1], '$'));
        $nombre = "Paleta/Chocolate_Fresa";
        $cantidad = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos)) -5], '$'));
        
<<<<<<< HEAD
        //
        //comentario Roman se parece al Profe Lalo 
        //
        //Algo
=======
>>>>>>> 36d3fa7c3fd3e871a92647a8560a55b185ddc9fc
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
//Conos de Helado
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

//Bebidas
if (isset($_POST['Bebidas'])){ //Bebidas
    $Bebidas = [];

    if (!empty($_POST['Agua'])) { // Agua
        $datos = $_POST['Agua'];
        $precio = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos))-1], '$'));
        $nombre = "Bebidas/ Agua";
        $cantidad = intval(explode(" ", $datos)[0]);
        $sabores = [
            'nombre' => $nombre,
            'precio' => $precio,
            'cantidad' => $cantidad
        ];
        $Bebidas[] = $sabores;
    }

    if (!empty($_POST['Cafe'])) { // Cafe
        $datos = $_POST['Cafe'];
        $precio = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos))-1], '$'));
        $nombre = "Bebidas/Cafe";
        $cantidad = intval(explode(" ", $datos)[0]);
        $sabores = [
            'nombre' => $nombre,
            'precio' => $precio,
            'cantidad' => $cantidad
        ];
        $Bebidas[] = $sabores;
    }

    if (!empty($_POST['Frappe'])) { // Frappe
        $datos = $_POST['Frappe'];
        $precio = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos))-1], '$'));
        $nombre = "Bebidas/Frappe";
        $cantidad = intval(explode(" ", $datos)[0]);
        $sabores = [
            'nombre' => $nombre,
            'precio' => $precio,
            'cantidad' => $cantidad
        ];
        $Bebidas[] = $sabores;
    }

    foreach ($Bebidas as $bebida) {
        include 'database.php';
        $madarConsulta = mysqli_query($conectionSQL, "INSERT INTO ventas VALUES(null, '".$bebida['nombre']."', ".$bebida['cantidad'].", ".$bebida['precio'].");");
        // Por si hay error cierra la conexion
        if($madarConsulta == false){
            die(mysqli_error($conectionSQL));
            echo "Error";
        }
    }

    header("Location:../bebidas.html");
}

//Helado en Vasos
if (isset($_POST['Helados'])){ //Helados/Conos
    $Vasos = [];

    if (!empty($_POST['Helado_Vaso_Galleta'])) { // Cono Vainilla
        $datos = $_POST['Helado_Vaso_Galleta'];
        $precio = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos))-1], '$'));
        $nombre = "Helado Vaso/Galleta";
        $cantidad = intval(explode(" ", $datos)[0]);
        $sabores = [
            'nombre' => $nombre,
            'precio' => $precio,
            'cantidad' => $cantidad
        ];
        $Vasos[] = $sabores;
    }

    if (!empty($_POST['Helado_Vaso_Vainilla'])) { // Cono Fresa
        $datos = $_POST['Helado_Vaso_Vainilla'];
        $precio = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos))-1], '$'));
        $nombre = "Helado Vaso/Vainilla";
        $cantidad = intval(explode(" ", $datos)[0]);
        $sabores = [
            'nombre' => $nombre,
            'precio' => $precio,
            'cantidad' => $cantidad
        ];
        $Vasos[] = $sabores;
    }

    if (!empty($_POST['Helado_Vaso_Chocolate'])) { // Cono Chocolate
        $datos = $_POST['Helado_Vaso_Chocolate'];
        $precio = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos))-1], '$'));
        $nombre = "Helado Vaso/Chocolate";
        $cantidad = intval(explode(" ", $datos)[0]);
        $sabores = [
            'nombre' => $nombre,
            'precio' => $precio,
            'cantidad' => $cantidad
        ];
        $Vasos[] = $sabores;
    }

    foreach ($Vasos as $vaso) {
        include 'database.php';
        $madarConsulta = mysqli_query($conectionSQL, "INSERT INTO ventas VALUES(null, '".$vaso['nombre']."', ".$vaso['cantidad'].", ".$vaso['precio'].");");
        // Por si hay error cierra la conexion
        if($madarConsulta == false){
            die(mysqli_error($conectionSQL));
            echo "Error";
        }
    }

    header("Location:../VasoHel.html");
}

//Frituras
if (isset($_POST['Frituras'])){ //Helados/Conos
    $Frituras = [];

    if (!empty($_POST['Papas'])) { // Papas
        $datos = $_POST['Papas'];
        $precio = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos))-1], '$'));
        $nombre = "Frituras/Papas";
        $cantidad = intval(explode(" ", $datos)[0]);
        $sabores = [
            'nombre' => $nombre,
            'precio' => $precio,
            'cantidad' => $cantidad
        ];
        $Frituras[] = $sabores;
    }

    if (!empty($_POST['Palomitas'])) { // Palomitas
        $datos = $_POST['Palomitas'];
        $precio = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos))-1], '$'));
        $nombre = "Frituras/Palomitas";
        $cantidad = intval(explode(" ", $datos)[0]);
        $sabores = [
            'nombre' => $nombre,
            'precio' => $precio,
            'cantidad' => $cantidad
        ];
        $Frituras[] = $sabores;
    }

    if (!empty($_POST['Nachos'])) { // Nachos
        $datos = $_POST['Nachos'];
        $precio = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos))-1], '$'));
        $nombre = "Frituras/Nachos";
        $cantidad = intval(explode(" ", $datos)[0]);
        $sabores = [
            'nombre' => $nombre,
            'precio' => $precio,
            'cantidad' => $cantidad
        ];
        $Frituras[] = $sabores;
    }

    foreach ($Frituras as $fritura) {
        include 'database.php';
        $madarConsulta = mysqli_query($conectionSQL, "INSERT INTO ventas VALUES(null, '".$fritura['nombre']."', ".$fritura['cantidad'].", ".$fritura['precio'].");");
        // Por si hay error cierra la conexion
        if($madarConsulta == false){
            die(mysqli_error($conectionSQL));
            echo "Error";
        }
    }

    header("Location:../friturasCat.html");
}
