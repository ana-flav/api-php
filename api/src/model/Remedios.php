<?php
namespace model;
require ("vendor/autoload.php");
use model\Connection;
use PDO; 

class Remedios {


    public function createRemedios($nome, $valor) {
        $connection = new Connection();
        $resultado = $connection -> getConnection()->query("INSERT INTO remedios (nome, valor) VALUES ('$nome', '$valor' )");
        $resultado = $resultado -> fetchAll (PDO::FETCH_ASSOC);
        return isset($resultado[0]) ? $resultado : 0;

    }

    public function getRemedios() {
        $connection = new Connection();
        $resultado = $connection -> getConnection()->query("SELECT * FROM remedios");
        $resultado = $resultado -> fetchAll (PDO::FETCH_ASSOC);
        return isset($resultado[0]) ? $resultado : 0;

    }
}
