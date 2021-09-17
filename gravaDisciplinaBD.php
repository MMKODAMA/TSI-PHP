<?php

$_POST['nomeAula'] =$_POST['nomeAula'] ?? '';
$_POST['nomeProfessor'] = $_POST['nomeProfessor'] ?? '';
$_POST['diaAula'] = $_POST['diaAula'] ?? '';
$_POST['descricao'] = $_POST['descricao'] ?? '';

if( empty($_POST['nomeAula']) || empty($_POST['diaAula'])){

    die('ERRO! Os Campos nome e dia sao obrigatorios');

}

echo"Disciplina: {$_POST['nomeAula']}";
echo"<br><br>";
echo"Professor: {$_POST['nomeProfessor']}";
echo"<br><br>";
echo"Dia da disciplina: {$_POST['diaAula']}";
echo"<br><br>";
echo"Descriçao: {$_POST['descricao']}";
echo"<br><br>";

//banco de dados

$db_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$db_user = 'root';
$db_pass = '';

$db = new PDO($db_dsn, $db_user, $db_pass);

$stmt = $db->prepare('INSERT disciplinas 
                            (nomeAula, nomeProdessor, diaAula, descricao, ip)
                      VALUES
                            (:nomeAula, :nomeProfessor,:diaAula,:descricao, :ip)');

$valores[':nomeAula'] = $_POST['nomeAula'];
$valores[':nomeProfessor'] = $_POST['nomeProfessor'];
$valores[':diaAula'] = $_POST['diaAula'];
$valores[':descricao'] = $_POST['descricao'];
$valores['ip'] = $_SERVER['REMOTE_ADDR'];


// array(':nomeAula'= $_POST['nomeAula'],
//                 ':nomeProfessor' = $_POST['nomeProfessor'],
//                 ':diaAula' = $_POST['diaAula'],
//                 ':descricao' = $_POST['descricao'],
//                 ':ip' = $_SERVER['REMOTE_ADDR']
// );

if($stmt->execute($valores)){
    echo "Dados gravados com sucesso!";
}else{
    echo"ERRO AO GRAVAR NO BANCO DE DADOS!";
}
echo"<pre>";
var_dump($valores);
echo"</pre>";
