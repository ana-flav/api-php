<?php 
namespace model;
use PDO;

class Connection {

    function getConnection(){
        $host = 'dpg-cktr2b6nfb1c739804jg-a.oregon-postgres.render.com';
        $port = '5432';
        $dbName = 'db_farmacia_aetd';
        $user = 'db_farmacia_aetd_user'; 
        $password = '2QhbdXe58U9LtxGQdAR5XxIb2bIZ81S6';

        try {
            $pdo = new PDO ("pgsql:host=$host;port=$port;dbname=$dbName" , $user , $password);
            return $pdo;
    
        } catch (\PDOException $error) {
            echo "Erro na conexão: " . $error->getMessage();
        }
    }
}
?>


