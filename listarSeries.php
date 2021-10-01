<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$db_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$db_user = 'root';
$db_pass = '';

$db = new PDO($db_dsn, $db_user, $db_pass);

$sql = 'SELECT id,nomeSerie,anoLancamento FROM series';

$_GET['gravado']=$_GET['gravado'] ?? false;

if($_GET['gravado']){
    echo'<font color="green">Gravado com sucesso</font><br>';
}

$_GET['apagado']=$_GET['apagado'] ?? false;

if($_GET['apagado']){
    echo'<font color="green">apagado com sucesso</font><br>';
}

echo'<a href="serie.html">Cadastrar Nova Serie</a><br><br>
    <form action="apagaSerie.php" method="post">';
echo'<table border="1">
        <tr>
            <th>ID</th><th>Nome</th><th>Ano de Lançamento</th><th>Deletar</th>
        </tr>';

foreach($db->query($sql)as $registro){

    echo"<tr>
            <td>{$registro['id']}</td>
            <td>{$registro['nomeSerie']}</td>
            <td>{$registro['anoLancamento']}</td>
            <td><button name='apagar' value='{$registro['id']}'>apagar</button></td>
         <tr>";
//$sqlDelete = DELETE FROM series WHERE id = $registro['id'];

}
 echo'</table>';
 echo'</form>';