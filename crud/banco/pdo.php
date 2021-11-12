<?php

define('DB_HOST','localhost');
define('DB_PORT','3306');
define('DB_NAME','ling_serv');
define('DB_USER','root');
define('DB_PASS','');

$db_dsn = 'mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME;
$db_user = DB_USER;
$db_pass = DB_PASS;

$db = new PDO($db_dsn, $db_user, $db_pass);
