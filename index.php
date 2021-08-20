<?php

//echo "Hello World";

$nome = "Matheus Makoto Kodama";

echo "ola, " . $nome . "!<br><br>";//concatenado

echo "ola, $nome!";//interpolado

if($nome == "Matheus"){
    echo "<br><br>O nome é igual";
}else{
    echo "<br><br>O nome nao é igual";
};


for($i = 0 ;$i < 10 ; $i++ ){

echo "<br>essa é a linha $i <br>";
echo '<br> 2 + 2 = ' . (2+2) . '!';
}