<?php
namespace controller;
use model\Connection;
use model\Remedios;

class RemediosController {
    public function addRemedios($data) {
        $remediosModel = new Remedios();
        $data = json_decode($data, true);
        
        if ($remediosModel->createRemedios($data['nome'], $data['valor']) != 0) {
            return json_encode(["sucesso" => "Remedio cadastrado com sucesso."]);
        } else {
            return json_encode(["erro" => "Erro ao cadastrar o remédio."]);
        }
    }

    public function getRemedios() {
        $remediosModel = new Remedios();
        $remedios = $remediosModel->getRemedios();
        $remedios = json_encode($remedios);
        return $remedios;
    }
}
