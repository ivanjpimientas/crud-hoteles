<?php

Class HomeController{

	/*=============================================
	MOSTRAR NOTIFICACIONES
	=============================================*/

	static public function ctrMostrarInfoVCard($item, $valor){

		$tabla = "users";

		$respuesta = $tabla;

		return $respuesta;

	}

	static public function saveHotel(){

		$url = "hotels";
		$method = "POST";
		$fields = array(
			"name" => $_POST['name'],
			"address" => $_POST['address'],
			"city" => $_POST['city'],
			"nit" => $_POST['nit'],
			"quantity_rooms" => $_POST['quantity_rooms']
		);

		$respuesta = CurlController::request($url, $method, $fields);
		
		if($respuesta->status == 200){
			echo '<script> 
					swal({
							title: "¡OK!",
							text: "¡Registro insertado correctamente!",
							type:"success",
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
						},

						function(isConfirm){
							if(isConfirm){
								history.back();
						}
					});
				</script>';
		}

	}

}