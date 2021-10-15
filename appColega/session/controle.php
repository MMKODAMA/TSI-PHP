<?php

session_start();

if(!isset($_SESSION['id'])){
    echo 'faça login antes! <a href="login.hmtl">LOGIN</a>';
    exit();
}