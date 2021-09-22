$(document).ready(function()
{
    $('#cargarTablaCategoria').load('vistas/categorias/tablaCategorias.php');
    $('#frmAgregarCategoria').click(function(){
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
      if (respuesta==1) {
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
function eliminarCategoria()
{
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal("Poof! Your imaginary file has been deleted!", {
            icon: "success",
          });
        } else {
          swal("Your imaginary file is safe!");
        }
      });
}