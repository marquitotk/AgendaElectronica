<!-- Modal -->
<div class="modal fade" id="ActualizarCategoriaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Categorias</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form id="frmActualizarCategoria">
         <input type="text" name="idCategoria" id="idCategoria" hidden="">
         <label for="NombreCatgoriaAct"> Nombre </label>
         <input type="text" id="NombreCatgoriaAct" name="NombreCatgoriaAct" class="form-control">
         <label for="descripcionCategoriaAct"> Descripcion </label>
         <input type="text" id="descripcionCategoriaAct" name="descripcionCategoriaAct" class="form-control">
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btnActualizarCategoria">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>