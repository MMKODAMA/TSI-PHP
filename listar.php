<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$db_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$db_user = 'root';
$db_pass = '';

$db = new PDO($db_dsn, $db_user, $db_pass);

$sql = 'SELECT nomeAula,nomeProfessor,diaAula,descricao FROM disciplinas';
echo'<table border="1">
        <tr>
            <td>Nome</td><td>Professor</td><td>Dia</td><td>Descricao</td>
        </tr>';

foreach($db->query($sql)as $registro){

    echo"<tr>
            <td>{$registro['nomeAula']}</td>
            <td>{$registro['nomeProfessor']}</td>
            <td>{$registro['diaAula']}</td>
            <td>{$registro['descricao']}</td>
         <tr>";


}