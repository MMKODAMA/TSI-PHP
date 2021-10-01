<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);


$db_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
    $db_user = 'root';
    $db_pass = '';

    $db = new PDO($db_dsn, $db_user, $db_pass);
echo'<form method="post" action="apagaColega.php">';
echo'<table border="1">
            <tr>
                <td>ID</td><td>Nome</td><td>Açoes</td>
            </tr>';

    $stmt = $db->query('SELECT id,nome FROM colegas');

    while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){

        echo"<tr>
                <td>{$registro['id']}</td>
                <td>{$registro['nome']}</td>
                <td>
                    <button name='delete' value='{$registro['id']}'>Deletar</button>
                    <button name='update' value='{$registro['id']}'>Editar</button>
                </td>
             <tr>";

    }
    
echo'</table>';
echo'</form>';
echo'<button action="appColega/colegasForm.html">Cadastrar</button>';