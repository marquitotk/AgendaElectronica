<?php
require_once "../../clases/Categorias.php";
$datos=array(
        "nombre"=>$_POST['nombreCatgoria'],
        "descripcion"=>$_POST['descripcion']
);
$Categorias = new Categorias();
echo $Categorias->agregarCategorias($datos);
?>