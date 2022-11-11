<?php
require_once './vendor/autoload.php';

use ExemploPDOMySQL\MySQLConnection; //PDO

$bd = new PDO('mysql:host=localhost;dbname=biblioteca', 'root', '');

$comando = $bd->prepare('SELECT * FROM generos');
$comando ->execute();
$generos = $comando->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca</title>
</head>
<body>
    <a href="insert.php">Novo Gênero</a>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
        </tr>
        <?php foreach($generos as $g): ?>
            <tr>
                <td><?= $g['id']?></td>
                <td><?= $g['nome']?></td>
            </tr>
            <?php endforeach ?>
    </table>
</body>
</html>