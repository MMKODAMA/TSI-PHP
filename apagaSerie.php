<?php
var_dump($_POST);

$db_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$db_user = 'root';
$db_pass = '';

$db = new PDO($db_dsn, $db_user, $db_pass);

$stmt = $db->prepare('DELETE FROM series WHERE id=:id');

$success = $stmt->execute([':id' => $_POST['apagar']]);


header('Location: listarSeries.php?apagado=1');