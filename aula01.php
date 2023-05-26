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

// ------------------ VETORES E FUNÇÕES --------------
// Como declarar um vetor e inserir dados nele

// Arrays Númericos
// 1 Forma
$carros = array("Golf","Fusca","Ferrari");
// 2 Forma
$carros = ['Golzin','Astra','UPI'];
// 3 Forma
$carros[0] = "UPI";
$carros[1] = "Voyage";
$carros[2] = "Corola";
// 4 Forma
$carros[] = 'Fusquinha';
$carros[] = 'Civic';
$carros[] = 'Golf SporLine';

// Arays Associativos
// 1 Forma
$carros = array('VW' => 'Gol', 'Chevrolet' => 'Camaro', 'Mercedez' => 'Evoque');
// 2 Forma
$carros = ['VW' => 'Gol', 'Chevrolet' => 'Camaro', 'Mercedez' => 'Evoque'];
// 3 Forma
$carros['VW'] = 'Gol';
$carros['Chevrolet'] = 'Camaro';
$carros['Ford'] = 'FORD KA';

// Arrays Misto
$carros = array(
    'VW' => "Polo", 
    0 => "Felipe", 
    'Chevrolet' => "Camaro", 
    1 => "Daniel"
);

// Varias funções para mexer nos arrays
// printar todo o array
print_r($carros);
// contar valores de um array
count($carros);
// para remover valores de um array
unset($carros[0], $carros['Chevrolet']);
// para remover valores de um array utilizando splice
array_splice($carros, 2, 2);

// ARRAYS MULTIDIMENSIONAIS
$frutas = array('Vermelhas' => array("Morango", "Maçã", "Acerola"), 'Citricas' => array("Limão", "Laranja", "Kiwi"));

print_r($frutas['Citricas'][1]);

// FUNÇÕES EM PHP
$num1 = 2;
$num2 = 5;

$resp = soma($num1, $num2);
imprimi($num1, $num2, $resp);

function soma($x, $y){
    return $x + $y;
}

function imprimi($x, $y, $r){
    echo "A soma entre $x + $y = $r";
}


