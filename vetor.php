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


$grade['segunda'] = "PI-2";
$grade['terca'] = "CMS";
$grade['quarta'] = "bd";
$grade['quinta'] = "LS";
$grade['sexta'] = "LSW";

echo"<pre>";//tira a formataçao do texto

var_dump($grade);//ajuda na depuraçao



foreach($grade as $dia => $aula){
    echo"Dia : $dia => $aula\n";
}

echo"um tab é \t";
echo"uma quebra de linha em Windows é \r\n \n";
echo"se quiser mostrar aspas \"tudo bem\"";
echo"</pre>";

unset($grade);
unset($dia);
unset($aula);
$grade['segunda'][0] = "PI-2";
$grade['terca'][0] = "CMS";
$grade['terca'][1]= "direito";
$grade['quarta'][0] = "bd";
$grade['quinta'][0] = "LS";
$grade['sexta'][0] = "LSW";

echo"<pre>";

var_dump($grade);




foreach($grade as $dia => $materias){

    echo"Aula(s) na $dia\n";

    foreach($materias as $materia){
        echo"$materia, ";
    }

    echo"\n";

}



echo"</pre>";


include('linkform.html');