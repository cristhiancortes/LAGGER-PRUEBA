<?php

//conexion a la base de datos
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'landing_page';
$charset = 'utf8mb4';

$db = mysqli_connect($server, $username, $password, $database);

        if (!$db) {
            $error_conexion = 'Error de conexion a la db';
            die($error_conexion);

        }else{
            mysqli_set_charset($db, $charset);
        }

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	$nombre  = $_POST['nombre'];
	$nit     = $_POST['nit'];
	$punto   = $_POST['punto'];
	$equipo  = $_POST['equipo'];
	$ciudad  = $_POST['ciudad'];
	$promotor= $_POST['promotor'];
	$rtc     = $_POST['rtc'];
	$capitan = $_POST['capitan'];
	$ip = $_SERVER['REMOTE_ADDR'];

	$query = "INSERT INTO registro_landing (nombre, nit, punto, equipo, ciudad, promotor, rtc, capitan, dir_ip) 
    		  VALUES ('$nombre',' $nit','$punto','$equipo',' $ciudad',' $promotor',$rtc,' $capitan','$ip')";

   	$insert = mysqli_query($db, $query);

   	if($insert == 1){
   		

   		$leadInfo = [ 'nombre' => $nombre,
   						'nit' => $nit,
   						'punto' => $punto,
   						'equipo' => $equipo,
   						'ciudad' => $ciudad,
   						'promotor' => $promotor,
   						'rtc' => $rtc,
   						'capitan' => $capitan,
   						'ip' => $ip
   					];

   		$dataService = [ 'identificador' => date('Y-m-d'),
   							'tipo' => 'prueba Legger Cristian',
   							'info' => $leadInfo
   						];
   	//curl

   	$url = 'https://app-edu-recaudocursos-php.azurewebsites.net/api-cursos/public/crear-logs';

	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => $url,
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => '',
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 0,
	  CURLOPT_FOLLOWLOCATION => true,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => 'POST',
	  CURLOPT_POSTFIELDS => json_encode($dataService),
	  CURLOPT_HTTPHEADER => array(
	    'Content-Type: application/json'
	  ),
	));
	
	$resultData = curl_exec($curl);
	
	echo $resultData;

	curl_close($curl);
   		
   	}else{
   		echo 'Fallo el registro en la base de datos';
   	}


}







