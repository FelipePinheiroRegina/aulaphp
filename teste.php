<?php
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