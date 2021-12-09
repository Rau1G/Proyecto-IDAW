<?php
$variable = "1 - Paleta Fresa: $10";
$arregloDatos = explode(" ", $variable);
$precio = $arregloDatos[count($arregloDatos)-1];
$precio = ltrim($precio, '$');
$precio = intval($precio);
echo var_dump($precio);
echo "<pre>";
var_dump($_POST['finalizar']);
echo "</pre>";


if (isset($_POST['finalizar'])){
    
}