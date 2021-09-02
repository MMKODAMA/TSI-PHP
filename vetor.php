<?php

$despesas[0] = 345.55;
$despesas[1] = 135.00;
$despesas[2] = 600.00;
$despesas[3] = 900.00;
$despesas[4] = 400;



for($i = 0; $i<5;$i++){
echo $despesas[$i] . "<br>";
}

unset($despesas);//apagar/destruir o vetor

$despesas['mercado'] = 345.55;
$despesas['estacionamento'] = 135.00;
$despesas['alimentacao'] = 600.00;
$despesas['bar'] = 900.00;
$despesas['educacao'] = 400;

echo "despesas<br>";

foreach($despesas as $nome/*indice*/ => $gasto /*valor*/){

    echo "$nome : R$ " . number_format($gasto, 2,',','.') . "<br>";

}

$semana['segunda'] = "aula de PI" ;
$semana['terca'] = "aula de CMS" ;
$semana['quarta'] = "dia de folga" ;
$semana['quinta'] = "aula de Linguagens de servidor" ;
$semana['sexta'] = "aula de linguagens de script" ;
$semana['sabado'] = "descançar" ;
$semana['domingo'] = "descançar" ;

foreach($semana as $dia => $atividade){
    echo "Dia: $dia => $atividade<br>";
}
