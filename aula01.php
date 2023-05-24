<?php
echo 'Olá, Mundo!';

// Forma tradicional Estura Condicional
$var1 = 2;
$var2 = 5;

if($var1 == $var2){
    echo '$var1 é igual $var2 \n\n';
}else{
    echo '$var1 não é igual $var2 \n\n';
}

// Forma com : (dois pontos)
if($var1 == $var2):
    echo '$var1 é igual $var2 \n\n';
else:
    echo '$var1 não é igual $var2 \n\n';
endif;

// Operador Ternário
$var1 = 5;

$var2 = ($var1 >= 10) ? 11 : 9;
echo $var2;

// Estrutura de repetição com Else If
$var1 = 10;
$var2 = 10;

if($var1 > $var2){
    echo "$var1 é maior que $var2";
}elseif($var2 > $var1){
    echo "$var2 é maior que $var1";
}else{
    echo "$var1 e $var2 são iguais!";
}

// Usando Switch
$var1 = 10;

switch($var1){
    case 10:
        echo "$var1 é igual a 10";
        break;
    case 20:
        echo "$var1 é igual a 20";
        break;
    default:
        echo "$var1 não é igual a 10 nem a 20";
        break;   
}

// -----------ESTRUTURAS DE REPETIÇÃO -----------------
// WHILE
$n = 0;
while($n <= 20){
    echo "$n \n";
    $n += 2;
}
// WHILE COM : (DOIS PONTOS)
$n = 0;
while($n <= 20):
    echo "$n \n";
    $n += 2;
endwhile;

// DO WHILE
$n = 0;
do{
    echo "$n \n";
    $n += 2;
}while($n <= 20);

// FOR
for($n = 0; $n <= 20; $n++){
    echo "$n \n";
}

// FOREACH
$carros = array('Polo', 'Golf', 'Fusca');

foreach($carros as $carro){
    echo "$carro \n";
    echo "\n";
}

for($c = 0; $c < count($carros); $c++){
    echo $carros[$c];
    echo "\n";
}
echo "I have $c cars in the parking lot";


