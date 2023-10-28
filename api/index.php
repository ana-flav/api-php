<?php
header("Access-Control-Allow-Origin: http://localhost");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type");

require ("vendor/autoload.php");

$method = $_SERVER['REQUEST_METHOD'];
$url = $_SERVER['REQUEST_URI'];


if ($method == 'POST'){
    switch ($url){
        case '/remedios/cadastrar':
            $remediosController = new controller\RemediosController();
            $response =  $remediosController -> addRemedios(file_get_contents("php://input"));
            echo $response;
            break;
        default:
            echo (json_encode($data = [
                "status" => 404,
                "message" => "Rota $url nao encontrada"
        ]));
    }
}elseif ($method == 'GET'){
    switch ($url){
        case '/remedios/listar':
            $remediosController = new controller\RemediosController();
            $response =  $remediosController -> getRemedios();
            echo $response;
            break;
        default:
           echo (json_encode($data = [
                    "status" => 404,
                    "message" => "Rota $url nao encontrada"
            ]));
            
    }
}else{
        header ("HTTP/1.0 404 Page Not Allowed");
        echo (json_encode ($response));
}
