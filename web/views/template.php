<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inicio | AI VCards</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/assets/css/adminlte.min.css">

  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>
<body class="hold-transition sidebar-collapse">

<?php

$rutaApi = RoutesModel::ctrRouteApi();
$rutaClient = RoutesModel::ctrRouteClient();

 date_default_timezone_set("America/Bogota");
 
    echo '<div class="wrapper">';

    /*=============================================
     CABEZOTE
     =============================================*/
     include "pages/modules/header.php";

    /*=============================================
     LATERAL
     =============================================*/
     include "pages/modules/sidebar.php";

     /*=============================================
     CONTENIDO
     =============================================*/
     if(isset($_GET["modelpage"])){

        if($_GET["modelpage"]== "home" ||
           $_GET["modelpage"]== "rooms" ||
           $_GET["modelpage"]== "about"){

          include "pages/".$_GET["modelpage"].".php";
        }

     }else{

       include "pages/home.php";
     }

     /*=============================================
     FOOTER
     =============================================*/
     include "pages/modules/footer.php";

    echo '</div>';

    echo '<input type="hidden" id="rutaClient" value="'.$rutaClient.'">'; 
 
?>

<!-- jQuery -->
<script src="views/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="views/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->
<script src="views/assets/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes 
<script src="views/js/demo.js"></script> -->

<!-- PlantUML -->
<script src="views/assets/plugins/jquery-plantuml/jquery_plantuml.js"></script>

<!-- Sweet Alert 2 -->
<script src="views/assets/plugins/sweetalert2/sweetalert2.all.js"></script>

<!--=====================================
JS PERSONALIZADO
======================================-->
<script src="views/assets/js/template.js"></script>

</body>
</html>