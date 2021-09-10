<?php

//echo"recebe.php";

//var_dump($_POST);
$_POST['email'] = $_POST['email'] ?? 'Nao informado';
$_POST['password'] = isset($_POST['password']) ? $_POST['password'] : 'Nao informado';

echo "o seu email é ". $_POST['email'];
echo"<br><br>";
//echo"seu email é {$_POST['email']}";
echo"sua senha é {$_POST['password']}";



