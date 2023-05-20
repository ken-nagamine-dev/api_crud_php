<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json");

require_once '../vendor/autoload.php';

// set your services here
$servicesList = ['user'];

// set your timezone here
date_default_timezone_set("America/Sao_Paulo");

if (isset($_GET["url"])) {
   $url = explode('/', $_GET["url"]);

   if ($url[0] === 'api') {
      array_shift($url);
      if($url){
         if(in_array($url[0], $servicesList)){
            $service = 'App\Services\\' . ucfirst($url[0]) . 'Service';
            array_shift($url);
            $method = strtolower($_SERVER['REQUEST_METHOD']);
            try {
               $response = call_user_func_array(array(new $service, $method), $url);
               echo json_encode(array('data' => $response));
               exit;
            } catch (\Exception $e) {
               http_response_code(404);
               echo json_encode(array('data' => $e->getMessage()), JSON_UNESCAPED_UNICODE);
            }
         } else {
            echo "No results for this address!";
         }
      } else {
         echo "No results for this address!";
      }
   }
} else {
   echo "Path does not exist";
   exit;
}

