<!DOCTYPE html>
<html lang="en">
<head>
        
    <title>.:Agenda Electronica:.</title>
    <link rel="icon" type="image/png" href="public/imagenes/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php require_once "dependencias.php"; ?>
</head>
<body>
    <div class="container" >
        <?php require_once "menu.php"?>
          <div class="jumbotron">
            
            <h1>Contacto</h1>
            <button class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#AgregarContactoModal">
                        <span class="fas fa-user-edit"></span>Agregar Contacto
            </button>
            <hr class="my-4">  
            <div id="cargarTablaContacto">

            </div>
            <?php
              require_once "vistas/contactos/modal_AgregarContacto.php"
            ?>
          </div>
    </div>
  <script src="public/js/contactos.js"></script>
</body>
</html>