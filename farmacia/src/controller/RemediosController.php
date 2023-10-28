<?php
namespace controller;
use connection\ApiModel;

class RemediosController {
    public function addRemedios($nome, $valor) {
        $api = new ApiModel();
        $url = "/remedios/cadastrar";
        $data = json_encode(["nome" => $nome, "valor" => $valor]);
        $response = $api->requestApi($url, "POST", $data);
        return $response; 
    }

    public function getRemedios() {
        $api = new ApiModel();
        $url = "/remedios/listar";
        $response = $api->requestApi($url, "GET");

        
        return $response; 
    }
}
