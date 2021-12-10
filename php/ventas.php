<?php
if (isset($_POST['Paletas'])){ //Paletas
    $paletas = [];
    if ($_POST['Paleta_Chocolate'] != "-1") {
        $datos = $_POST['Paleta_Chocolate'];
        $precio = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos))-1], '$'));
        $nombre = ltrim(explode(" ", $datos)[count(explode(" ", $datos))-2], ':');
        $cantidad = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos)) -5], '$'));
        
        $sabores = [
            'nombre' => $nombre,
            'precio' => $precio,
            'cantidad' => $cantidad
        ];
        $paletas[5] = $sabores;
    }if($_POST['Paleta_Fresa'] != "-1"){
        $datos = $_POST['Paleta_Fresa'];
        $precio = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos))-1], '$'));
        $nombre = ltrim(explode(" ", $datos)[count(explode(" ", $datos))-2], ':');
        $cantidad = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos)) -5], '$'));
        
        $sabores = [
            'nombre' => $nombre,
            'precio' => $precio,
            'cantidad' => $cantidad
        ];
        $paletas[0] = $sabores;
    }
    echo "<pre>";
    var_dump($paletas);
    echo "</pre>";
}

if (isset($_POST['Helados'])){ //Helados
    
    
}

if (isset($_POST[''])){ //Helados/Conos
    
    
}

if (isset($_POST[''])){ //Frituras
    
    
}

if (isset($_POST[''])){ //Bebidas
    
    
}

