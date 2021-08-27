<?php

//muito util para debug (NUNCA USAR EM PRODUÇAO)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//echo "Hello World";

$nome = "Matheus Makoto Kodama";

echo "ola, " . $nome . "!<br><br>";//concatenado

echo "ola, $nome!";//interpolado
//Condicionais
if($nome == "Matheus"){
    echo "<br><br>O nome é igual";
}else{
    echo "<br><br>O nome nao é igual<br><br>";
};

$dia = "sexta";

switch($dia){
    case "segunda":
        echo "estude";
        break;
    case "terça":
        echo "va para a aula de CMS";
        break;
    case "quarta":
        echo "va para a aula de BD";
        break;
    case "quinta":
        echo "seja feliz aqui e agora";
        break;
    case "sexta":
        echo "va para o kombuka";
        break;
    default:
        echo "va descansar";

}

echo "<br><br>";

$animal = 'cachorro';

$tipo = $animal == 'cachorro' ? 'mamifero': 'desconhecido'; // operador ternario



$sobrenome = $sobrenome_informado ?? 'nao informado'; // ?? verifica se a variavel existe

echo "<br>Sobrenome: $sobrenome<br>";


echo "<br>$animal é um animal do tipo $tipo<br>";

if($animal == 'cachorro'){
    $tipo = 'mamifero';
}else{
    $tipo = 'desconhecido';
}



echo "<br><br>";

//loopings
echo "<br>FOR<br>";
for($i = 0 ;$i < 10 ; $i++ ){

echo "<br>essa é a linha $i <br>";
}
echo "<br>WHILE<br>";
$i=0;
while($i < 10){
    echo "<br>Essa é a linha $i<br>";
    $i++;
}
$i=0;
echo "<br>DO<br>";
do{

    echo "<br>Essa é a linha $i<br>";
    $i++;

}while($i < 10);

echo '<br> 2 + 2 = ' . (2+2) . '!';

include 'link.html';//se nao existir link.html da um erro mas continua a execuçao
require 'link.html';//se nao existir link.html, da um erro fatal e para o programa
require_once 'link.html';//verifica se ja foi incluido antes , nao inclui novamente
include_once 'link.html';//verifica se ja foi incluido antes , nao inclui novamente