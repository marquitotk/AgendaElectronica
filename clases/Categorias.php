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
    public function eliminarCategoria($idCategoria)
    {
        $conexion = Conexion::conectar();
        $sql ="DELETE FROM t_categoria WHERE id_categoria=?";
        $query=$conexion->prepare($sql);
        $query->bind_param('i',$idCategoria);
        $respuesta=$query->execute();
        
        return $respuesta;
    }
}
?>