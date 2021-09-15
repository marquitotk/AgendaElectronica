<div class="card">
  <div class="card-body">
    <table class="table table-hover table-condensed" id="dt_tablaContacto">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Categoria</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>
            <span class="btn btn-warning btn-sm">
                  <span class="fas fa-user-edit">   </span>  
            </span>
          </td>
          <td>
          <span class="btn btn-danger btn-sm">
                  <span class="far fa-trash-alt">   </span>  
            </span>
          </td>
        </tbody>
    </table>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function () {
 
  $('#dt_tablaContacto').DataTable();
});

</script>