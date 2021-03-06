$(document).ready(function()
{
    $('#cargarTablaCategoria').load('vistas/categorias/tablaCategorias.php');
    $('#btnGuardarCategoria').click(function(){

      if ($("#nombreCatgoria").val() === "" ) {
        swal("0-0", "Por favor ingrese datos", "error");
        return false;
       } 
        agregarCategoria();
    });
    $('#btnActualizarCategoria').click(function()
    {
        actualizarCategoria();
    });

});
function agregarCategoria()
{
  $.ajax({
    type:"POST",
    data:$('#frmAgregarCategoria').serialize(),
    url:"procesos/categoria/agregarCategoria.php",
    success:function (respuesta) {
      respuesta=respuesta.trim();
      if (respuesta == 1) {
      
        swal(":D","===Categorias","success");
      }
      else
      {
        swal(":C","===Categorias Cancelar","error");
      } 
    } 
  });
}
function eliminarCategoria(idCategoria)
{
  swal({
    title: "¿Estas Seguro que deseas eliminar esta Cateoria?",
    text: "Una vez Eliminado no se Prodra Recuperar!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
     $.ajax({
     type:"POST",
     data:"idCategoria="+idCategoria,
     url:"procesos/categoria/eliminarCategoria.php",
     success:function(respuesta)
     {
      respuesta=respuesta.trim();
      if (respuesta == 1) {
        $('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');
        swal(":D","===Categorias","success");
      }
      else
      {
        swal(":C","===Categorias Cancelar","error");
      }  
      
     }

     });
    } 
  });
}
function obtenerDatosCategoria(idCategoria)
{

  $.ajax({
    type:"POST",
    data:"idCategoria="+idCategoria,
    url:"procesos/categoria/obtenerDatosCategoria.php",
    success:function (respuesta) {
      respuesta=jQuery.parseJSON(respuesta)

      $('#idCategoria').val(respuesta['idcategoria']);
      $('#NombreCatgoriaAct').val(respuesta['nombre']);
      $('#descripcionCategoriaAct').val(respuesta['descripcion']);
    } 
  });
}
function actualizarCategoria(){
  $.ajax({  
		type:"POST",
		data:$('#frmActualizarCategoria').serialize(),
		url: "procesos/categoria/actualizarCategoria.php",
		success:function(respuesta) {
			respuesta = respuesta.trim();
			if (respuesta == 1) {
				$('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');
				$('#ActualizarCategoriaModal').modal("toggle");
				swal(":D","Se actualizo con exito!==========","success");
			} else {
				swal(":(","No se pudo actualizar!===========","error");
			}
		}
	});
}
