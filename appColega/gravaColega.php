<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$nome = $_POST['nome'] ?? false;

if($nome ){

    //banco de dados

    $db_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
    $db_user = 'root';
    $db_pass = '';

    $db = new PDO($db_dsn, $db_user, $db_pass);

    $stmt=$db->prepare('INSERT INTO colegas(nome) VALUES (:nome)');

    if($stmt->execute([':nome' => $nome])){
        echo"$nome gravado com sucesso!";
    }else{
        echo"Erro ao gravar!";
    }

}else{
    echo'O campo nome é obrigatorio';
}