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



////abre arquivo
//$file = fopen('BD.csv','a');
////grava no arquivo
//fwrite($file, "{$_POST['nomeAula']};{$_POST['nomeProfessor']};{$_POST['diaAula']};{$_POST['descricao']};{$SERVER['REMOTE_ADDR']}\r\n");
////fecha arquivo
//fclose($file);


//echo"<br><br> {$_POST['nomeAula']} gravada com sucesso do IP {$SERVER['REMOTE_ADDR']}!";

////FORMATACAO DA DATA
////forma 1
// $nomeDaVar = substr($nomeDaVar,8,2)."/".substr($nomeDaVar,5,2)."/".substr($nomeDaVar,0,4);

////forma2
//$timestamp = strtotime($nomeDaVar);
//$nomeDaVar = date('d/m/Y',$timestamp);