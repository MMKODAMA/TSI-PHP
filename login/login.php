<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);


session_start();


//banco de dados

$db_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$db_user = 'root';
$db_pass = '';

$db = new PDO($db_dsn, $db_user, $db_pass);

$stmt = $db->prepare('SELECT id,email,senha FROM usuarios WHERE email = :email');

$stmt->execute([':email'=> $_POST['email']]);

$registro = $stmt->fetch(PDO::FETCH_ASSOC);



if($registro){
    if(password_verify($_POST['password'], $registro['senha'])){
        
        $_SESSION['id'] = $registro['id'];
        echo 'Menu: <a href="../appColega/index.php">Colegas</a>';
        echo 'botao logout';
    }else{
        
        session_destroy();
        echo 'Credenciais invalidas<br><br><a href="login.html">Tente Novamente</a>';
    }
}else{
    session_destroy();
    echo 'Credenciais invalidas<br><br><a href="login.html">Tente Novamente</a>';
}

if(!isset($_SESSION['id'])){
    echo 'Acesso Negado';
    exit();
} 