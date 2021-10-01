<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$novoNome = "Linguagem de Servidor";

$db_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$db_user = 'root';
$db_pass = '';

$db = new PDO($db_dsn, $db_user, $db_pass);

$preparada = $db->prepare('UPDATE disciplinas SET nomeAula= :nome WHERE id = 3');

if($preparada){

    if($preparada->execute([':nome' => $novoNome])){
        
        echo"Sucesso";

    }

}else{
    echo"ERRO!";
}