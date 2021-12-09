<?php
if (isset($_POST['Paletas'])){ //Paletas
    $datos = $_POST['Chocolate'];
    $precio = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos))-1], '$'));
    echo $precio;
    //$nombre = 
}

if (isset($_POST[''])){ //Helados
    $datos = $_POST['Chocolate'];
    $precio = intval(ltrim(explode(" ", $datos)[count(explode(" ", $datos))-1], '$'));
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

