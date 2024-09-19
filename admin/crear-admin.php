<?php
        include_once 'templates/header.php';
        include_once 'templates/barra.php';
        include_once 'templates/navegacion.php';
?>  

  <!-- =============================================== -->



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Crear Administrador
        <small>Llena el formulario para crear un Administrador</small>
      </h1>
    </section>


    <div class="row">
      <div class="col-md-8"> 
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Crear Administrador</h3>
        </div>
        <div class="box-body">

        <form role="form" name="crear-admin" id="crear-admin" method="post" action="insertar-admin.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Completo">
                </div>

                <div class="form-group">
                  <label for="usuario">Usuario</label>
                  <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
                </div>

                <div class="form-group">
                  <label for="contrasena">Contraseña</label>
                  <input type="contrasena" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña">
                </div>              
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="agregar-admin" value="1">
                <button type="submit" class="btn btn-primary">Añadir</button>
              </div>
            </form>

        </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->

      </div>
    </div>

  </div>
  <!-- /.content-wrapper -->

<?php
        include_once 'templates/footer.php';
?>


