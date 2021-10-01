<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);


$_POST['nomeSerie'] =$_POST['nomeSerie'] ?? '';
$_POST['anoLancamento'] = $_POST['anoLancamento'] ?? '';


if( empty($_POST['nomeSerie']) || empty($_POST['anoLancamento'])){

    die('<br><br>ERRO! Os Campos nome da serie e ano de lancamento sao obrigatorios');

}

echo"Nome da Serie: {$_POST['nomeSerie']}";
echo"<br><br>";
echo"Ano de Lancamento: {$_POST['anoLancamento']}";
echo"<br><br>";


//banco de dados

$db_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$db_user = 'root';
$db_pass = '';

$db = new PDO($db_dsn, $db_user, $db_pass);

$stmt = $db->prepare('INSERT series 
                            (nomeSerie, anoLancamento)
                      VALUES
                            (:nomeSerie, :anoLancamento)');

$valores[':nomeSerie'] = $_POST['nomeSerie'];
$valores[':anoLancamento'] = $_POST['anoLancamento'];



// array(':nomeSerie'= $_POST['nomeSerie'],
//       ':anoLancamento' = $_POST['anoLancamento']
// );

if($stmt->execute($valores)){
    echo "Dados gravados com sucesso!";
}else{
    echo"ERRO AO GRAVAR NO BANCO DE DADOS!";
}
echo"<pre>";
var_dump($valores);
echo"</pre>";
header('Location: listarSeries.php?gravado=1');