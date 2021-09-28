$(document).ready(function()
{
    $('#cargarTablaCategoria').load('vistas/categorias/tablaCategorias.php');
    $('#btnGuardarCategoria').click(function(){

      if ($("#nombreCatgoria").val() === "" ) {
        swal("T-T", "Por favor ingrese datos", "error");
        return false;
       } 
        agregarCategoria();
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
        $('#frmAgregarCategoria')[0].reset();
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