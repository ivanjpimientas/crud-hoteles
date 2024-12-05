<?php

require_once "models/routes.php";

require_once "controllers/template.controller.php";
require_once "controllers/curl.controller.php";

/* 
require_once "controllers/correo.controlador.php";
require 'extensions/vendor/autoload.php';
*/

$index = new TemplateController();
$index -> index();

?>