<?php

$_POST['nomeSerie'] =$_POST['nomeSerie'] ?? '';
$_POST['anoLancamento'] = $_POST['anoLancamento'] ?? '';

if( empty($_POST['nomeSerie']) || empty($_POST['anoLancamento'])){

    die('ERRO! Os Campos nome e dia sao obrigatorios');

}

echo"Disciplina: {$_POST['nomeSerie']}";
echo"<br><br>";
echo"Professor: {$_POST['anoLancamento']}";
echo"<br><br>";


