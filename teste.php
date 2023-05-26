<?php
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