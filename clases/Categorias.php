<?php
require_once "Conexion.php";

class Categorias extends Conexion{
    public function agregarCategorias($datos)
    {
        $conexion = Conexion::conectar();
        $sql ="INSERT INTO t_categoria(nombreCategoria,descripcionCategoria) VALUES (?,?)";
        $query=$conexion->prepare($sql);
        $query->bind_param('ss',$datos['nombre'],$datos['descripcion']);
        $respuesta=$query->execute();
        
        return $respuesta;
    }
}
?>