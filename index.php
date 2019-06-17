<?php
require 'funciones.php';

$fotos_por_pagina = 8;
$pagina_actual = (isset($_GET['p'])? (int) $_GET['p'] : 1);
$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;

$conexion = conexion('fmattaperdomo','root','');

if (!$conexion){
    echo 'error(1)';
    die();
}

$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio, $fotos_por_pagina");
$statement->execute();
$fotos = $statement->fetchAll();

if (!$fotos) { 
    header('Location:index.php');
}

$statement = $conexion->prepare("SELECT FOUND_ROWS() as total_filas");
$statement->execute();
$total_fotos = $statement->fetch()['total_filas'];

$total_paginas = ceil($total_fotos / $fotos_por_pagina);

require('views/index.view.php');

?>