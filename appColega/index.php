<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require_once('session/controle.php');
require_once('banco./conecta.php');


    $stmt = $db->query('SELECT id,nome FROM colegas');

    $registros = $stmt->fetchAll();

    require('telas/index.tela.php');
    