
<?php
use GuzzleHttp\Client;
require_once "vendor/autoload.php";

$client = new Client();
// $response = $client->request('GET', 'http://cartero');
// Datos que deseas enviar
$data = [
    'asunto' => $_POST["asunto"],
    'cuerpo' => $_POST["cuerpo"],
    'destinatario' => $_POST["destinatario"]
];

// $response = $client->request('POST', '172.21.0.4', 
$response = $client->request('POST', 'http://cestero', 
[
    'form_params' => $data,
]);

// echo $response->getStatusCode(); // 200
// echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'



?>