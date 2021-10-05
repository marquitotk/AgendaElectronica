<?php
require_once "../../clases/Categorias.php";
$datos = array(
        "idcategoria"=>$_POST['idCategoria'], 
             "nombre"=>$_POST['NombreCatgoriaAct'],
        "descripcion"=>$_POST['descripcionCategoriaAct']
            );
$Categorias = new Categorias();
echo $Categorias->actualizarCategoria($datos);
?>