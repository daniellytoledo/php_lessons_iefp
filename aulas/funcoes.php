<?php

function quebra($legenda) {
    echo "<br><hr>:::::::::::::::::::::::::::::::::::::::::::::::::::::: $legenda <hr><br>";
}

/* function pre($valor, $die=false) {
    echo "<br><hr><pre>";
    echo var_dump($valor);
    echo "</pre><hr><br>";
    if ($die==true) {
        die("Morreste!");
    }
} */

function saudacao($sujeito) {
    return "Olá, $sujeito! Que bom ver-te cá de novo.<br> O que vamos fazer hoje?"; 
}

echo saudacao("Jurivaldo");

$var1 = "Danielly!!";
/* pre($var1, true); */

echo "<br>Que belo fim de dia!";

quebra("FUNÇÃO DOBRO");

function dobro($numero) {
    return "O dobro do $numero é: " . $numero * 2 . "<br>";
}

echo dobro(27);

quebra("NÚMERO AO QUADRADO");

function quadrado($numero1) {
    return "O quadrado de $numero1 é: " . $numero1 ** 3 . "<br>";
}

echo quadrado(5);

quebra("PAR OU ÍMPAR");

function parouimpar($numero3) {
    if ($numero3 % 2 == 0) {
        return "par. <br>";
    } else {
        return "ímpar. <br>";
    }
}

echo "O $numero3 é: " . parouimpar(11);

quebra("foreach usando biblioteca com a função par ou ímpar...");

$numeros = [3, 12, 24, 29, 33, 34, 36, 41, 56, 13621812];

foreach ($numeros as $num) {
    echo "o $num é " . parouimpar($num);
    echo "<br>";
}

?>