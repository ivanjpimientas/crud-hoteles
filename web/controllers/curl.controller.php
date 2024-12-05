<?php 

class CurlController{

	/*=============================================
	Peticiones a la API
	=============================================*/	

	static public function request($url,$method,$fields){

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://localhost:7595/crud-hoteles/api/public/api/'.$url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => $method,
			CURLOPT_POSTFIELDS => $fields,
			CURLOPT_HTTPHEADER => array(
				'Authorization: fgadsfg34fhfgj456erFGHDRG6546hdfhdf'
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);

		if($method == "POST"){
			echo '<script type="text/javascript">
					window.location = "http://localhost:7595/crud-hoteles/web/"
				</script>';
		} 
		else if($method == "PUT"){
			echo '<script type="text/javascript">
					window.location = "http://localhost:7595/crud-hoteles/web/"
				</script>';
		}
		else if($method == "DELETE"){
			echo '<script type="text/javascript">
					window.location = "http://localhost:7595/crud-hoteles/web/"
				</script>';
		}
		else{
			$response = json_decode($response);
			return $response;
		}

	}

}
