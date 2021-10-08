<?php

session_start();
if(!isset($_SESSION['id'])){
    echo 'Acesso Negado';
    exit();
}
session_destroy();
header('Location: login.html');