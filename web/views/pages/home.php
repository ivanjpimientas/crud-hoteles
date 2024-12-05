<?php

/*=============================================
Hoteles
=============================================*/

$url = "hotels";
$method = "GET";
$fields = array();

$hotels = CurlController::request($url, $method, $fields);
$hotels = $hotels->data;

?>
<style>
  iframe {
    display: none
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row">

      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Hoteles</a></li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="settings">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="card">
                        <div class="card-header">
                          <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#crearHotel">Crear nuevo hotel</button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="tblHotels" class="table table-bordered">
                            <thead>
                              <tr>
                                <th style="width: 10px">#</th>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>Ciudad</th>
                                <th>NIT</th>
                                <th>Núm. Habitaciones</th>
                                <th>Acciones</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php if (!empty($hotels)): ?>
                                <?php foreach ($hotels as $key => $value): ?>
                                  <tr>
                                    <td><?php echo $value->id ?></td>
                                    <td><?php echo $value->name ?></td>
                                    <td><?php echo $value->address ?></td>
                                    <td><?php echo $value->city ?></td>
                                    <td><?php echo $value->nit ?></td>
                                    <td><?php echo $value->quantity_rooms ?></td>
                                    <td>
                                      <a class="btn btn-sm btn-primary" href="rooms?idhotel=<?php echo $value->id ?>">Ver Habitaciones</a>
                                    </td>
                                  </tr>
                                <?php endforeach ?>
                              <?php endif ?>
                            </tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>

                    </div>
                  </div>
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!--=====================================
Crear Hoteles
======================================-->
<div class="modal" id="crearHotel">

  <div class="modal-dialog">

    <div class="modal-content">

      <form action="<?php echo $rutaApi ?>hotels" method="POST" enctype="multipart/form-data">
 
        <div class="modal-header bg-info">
          
          <h4 class="modal-title">Crear Hotel</h4>

          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>

        <div class="modal-body">
          
          Nombre hotel

          <div class="input-group mb-3">

            <div class="input-group-append input-group-text">
              <i class="fas fa-list-ul"></i>
            </div>

            <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese el título de la categoría" required> 

          </div> 

          <hr class="pb-2">

          Dirección hotel

          <div class="input-group mb-3">

            <div class="input-group-append input-group-text">
              <i class="fas fa-list-ul"></i>
            </div>

            <input type="text" class="form-control" id="address" name="address" placeholder="Ingrese la dirección" required> 

          </div> 

          <hr class="pb-2">

          Ciudad hotel

          <div class="input-group mb-3">

            <div class="input-group-append input-group-text">
              <i class="fas fa-list-ul"></i>
            </div>

            <input type="text" class="form-control" id="city" name="city" placeholder="Ingrese la ciudad" required> 

          </div> 

          <hr class="pb-2">

          NIT hotel

          <div class="input-group mb-3">

            <div class="input-group-append input-group-text">
              <i class="fas fa-list-ul"></i>
            </div>

            <input type="text" class="form-control" id="nit" name="nit" placeholder="Ingrese el NIT" required> 

          </div> 

          <hr class="pb-2">

          Número de habitaciones del hotel

          <div class="input-group mb-3">

            <div class="input-group-append input-group-text">
              <i class="fas fa-list-ul"></i>
            </div>

            <input type="number" class="form-control" id="quantity_rooms" name="quantity_rooms" placeholder="Ingrese el número de habitaciones" required> 

          </div> 

          <hr class="pb-2">

        </div>

        <div class="modal-footer d-flex justify-content-between">
          
          <div>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>

          <div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            
          </div>

        </div>

      </form>

    </div>
    
  </div>

</div>