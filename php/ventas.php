<?php
if (isset($_POST['Paletas'])){ //Paletas
    $datos = $_POST['paleta1'];
    $precio = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos))-1], '$'));
    $nombre = ltrim(explode(" ", $datos)[count(explode(" ", $datos))-2], ':');
    $cantidad = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos)) -5], '$'));
    echo $cantidad;
    echo $nombre;
    echo $precio;
}

if (isset($_POST['Helados'])){ //Helados
    $datos = $_POST['helado1'];
    $precio = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos))-1], '$'));
    $nombre = ltrim(explode(" ", $datos)[count(explode(" ", $datos))-2], ':');
    $cantidad = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos)) -5], '$'));
    echo $cantidad;
    echo $nombre;
    echo $precio;
    
}

if (isset($_POST[''])){ //Helados/Conos
    $datos = $_POST['Chocolate'];
    $precio = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos))-1], '$'));
    echo $precio;
    
}

if (isset($_POST[''])){ //Frituras
    $datos = $_POST['Chocolate'];
    $precio = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos))-1], '$'));
    echo $precio;
    
}

if (isset($_POST[''])){ //Bebidas
    $datos = $_POST['Chocolate'];
    $precio = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos))-1], '$'));
    echo $precio;
    
}

