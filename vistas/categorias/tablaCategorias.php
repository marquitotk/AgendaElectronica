<?php
 require_once "../../clases/Conexion.php";

 $objCon=new Conexion();
 $conexion=$objCon->conectar();
 
 $sql="SELECT id_categoria,nombreCategoria,descripcionCategoria FROM t_categoria";
 $resultado=mysqli_query($conexion,$sql);
?>

<div class="card">
  <div class="card-body">
  <div class="table-responsive">
    <table class="table table-hover table-condensed" id="dt_tablaCategoria">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <?php
          
          while($mostrar=mysqli_fetch_array($resultado))
          {
            $idCategoria=$mostrar['id_categoria'];
          ?>
          <tr>
            <td><?php echo $mostrar['nombreCategoria']; ?></td>
            <td><?php echo $mostrar['descripcionCategoria']; ?></td>
            <td>
            <span class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#ActualizarCategoriaModal">
                  <span class="fas fa-user-edit">   </span>  
            </span>
          </td>
          <td>
          <span class="btn btn-danger btn-sm" onclick="eliminarCategoria('<?php echo $idCategoria; ?>')" >
                  <span class="far fa-trash-alt" ></span>  
            </span>
          </td>
          </tr>
          <?php
          }
          ?>
        </tbody>
    </table>
  </div>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function(){

  $('#dt_tablaCategoria').DataTable();
});
</script>