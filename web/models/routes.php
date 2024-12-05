<?php

class RoutesModel{

	/*=============================================
	RUTA LADO DEL CLIENTE (API)
	=============================================*/	

	static public function ctrRouteApi(){

		return "http://localhost:7595/crud-hoteles/api/public/api/";
	
	}

	/*=============================================
	RUTA ACCESO CLIENTE
	=============================================*/	

	static public function ctrRouteClient(){

		return "http://localhost:7595/crud-hoteles/web/";
	
	}

}