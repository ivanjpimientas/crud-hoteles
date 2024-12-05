<?php

/*=============================================
Hotel
=============================================*/
$_url = $_SERVER['REQUEST_URI'];

// Use parse_url() function to parse the URL 
// and return an associative array which contains its various components 
$url_components = parse_url($_url); 

// Use the parse_str() function to parse the 
// string passed via the URL 
parse_str($url_components['query'], $params); 

$val = $params['idhotel'];

$url = "hotels/".$val;
$method = "GET";
$fields = array();

$hotels = CurlController::request($url, $method, $fields);
$hotel = $hotels;

/*=============================================
Hoteles
=============================================*/

$url = "rooms/?idhotel=".$hotel->id;
$method = "GET";
$fields = array();

$rooms = CurlController::request($url, $method, $fields);
$rooms = $rooms->data;

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
                <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Habitaciones - <?php echo $hotel->name ?></a></li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="settings">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="card">
                        <div class="card-header">
                          <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#crearHabitacion" style="display:none;">Crear nueva habitación</button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="tblHotels" class="table table-bordered">
                            <thead>
                              <tr>
                                <th style="width: 10px">#</th>
                                <th>Cantidad</th>
                                <th>Tipo Habitación</th>
                                <th>Acomodación</th>
                                <th>Acciones</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php if (!empty($hotels)): ?>
                                <?php foreach ($rooms as $key => $value): ?>
                                  <tr>
                                    <td><?php echo $value->id ?></td>
                                    <td><?php echo $value->quantity ?></td>
                                    <td><?php echo $value->room_type ?></td>
                                    <td><?php echo $value->accommodation ?></td>
                                    <td>
                                      <a class="btn btn-sm btn-primary" href="rooms/<?php echo $value->id ?>" style="disabled:true;">Ver Detalle</a>
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
Crear Habitaciones
======================================-->
<div class="modal" id="crearHabitacion">

  <div class="modal-dialog">

    <div class="modal-content">

      <form action="<?php echo $rutaApi ?>hotels" method="POST" enctype="multipart/form-data">
 
        <div class="modal-header bg-info">
          
          <h4 class="modal-title">Crear Hotel</h4>

          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>

        <div class="modal-body">
          
          Cantidad

          <div class="input-group mb-3">

            <div class="input-group-append input-group-text">
              <i class="fas fa-list-ul"></i>
            </div>

            <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Ingrese cantidad" required> 

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