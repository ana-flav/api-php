<?php
require ("vendor/autoload.php");
use controller\RemediosController;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $remediosController = new RemediosController();
    $data = $remediosController->addRemedios($nome, $valor);
    echo $data;
}elseif(isset($_GET['listaRemedios'])) {
            $remediosController = new RemediosController();
            $remedios = $remediosController->getRemedios();
            $remedios = json_decode($remedios);
            echo '<h2>Remédios Cadastrados</h2>';
            echo '<ul>';
            foreach ($remedios as $remedio) {
                echo '<li>' . $remedio->nome . ' - Preço: ' . $remedio->valor . '</li>';
            }
            echo '</ul>';
        }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Remédios</title>
</head>
<body>
    <a href="index.php?listaRemedios">Listar Remédios</a>
    <h1>Cadastro de Remédios</h1>
    <form action="index.php" method="post">
        <label for="nome">Nome do Remédio:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        <label for="valor">Preço do Remédio:</label>
        <input type="number" id="valor" name="valor" step="0.01" required><br><br>
        <input type="submit" value="Cadastrar">
    </form> 
</body>
</html>