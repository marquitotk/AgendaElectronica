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
          <td></td>
          <td></td>
          <td>
            <span class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#ActualizarCategoriaModal">
                  <span class="fas fa-user-edit">   </span>  
            </span>
          </td>
          <td>
          <span class="btn btn-danger btn-sm" onclick="eliminarCategoria()" >
                  <span class="far fa-trash-alt" ></span>  
            </span>
          </td>
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