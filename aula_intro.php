<?php

function quebra($legenda) {
    echo "<br><hr>:::::::::::::::::::::::::::::::::::::::::::::::: $legenda :::::::::::::::::::::::::::::::::::::::::::::::: $legenda :::::::::::::::::::::::::::::::::::::::::::::::: <hr><br>";
}

quebra("ARRAYS parte 1");

$var1;
$var2 = 14.5;
$pessoas = ["Elisabete", "Anderson", "Miguel", "Bruno"];
$moradas = [
    "Elisabete"       => "Faro",
    "Anderson"        => "Rio",
    "Miguel"          => "Faro",
    "Bruno"           => "Faro"
]; // nessa função, só vamos conseguir mostrar a cidade se chamarmos o nome da pessoa

echo $pessoas[0];
echo "<br>";
echo $moradas["Elisabete"];
echo "<br>";

$var5 = "doce";

echo $pessoas[2];
echo "<br>";
echo $moradas["Anderson"];
echo "<br>";
echo "Eu gosto de sopa, mas prefiro um $var5";
echo "<br>";
echo 'Eu gosto de sopa, mas prefiro um $var5'; // o '' identifica tudo como texto e ignora a variável, e para identificar a variável neste caso usando '' seria necessário fazer assim: 'mas prefiro um ' . $var5 com o ponto,espaço e a variável

echo "<br>";

quebra("Estruturas Condicionais");

$rui = 67;
$ana = 70;

if ($rui === $ana) {
    echo "O Rui tem a mesma idade que a Ana. Ambos com $rui anos.";
} elseif ($rui > $ana) {
    echo "O Rui é mais velho que a Ana. A Rui tem $rui anos, e a Ana tem $ana anos.";
} else {
    echo "O Rui é mais novo que a Ana, tendo $rui anos, e a Ana $ana anos.";
}

echo "<br>";
quebra(" Condição IF");

$clube = "fcp";
$clube_faro = "scf";
$clube_fcp = "fcp";
$clube_slb = "slb";
$clube_scp = "scp";

echo "Qual o seu clube?";
echo "<br>";

if ($clube === $clube_faro) {
    echo "És farense!";
} elseif ($clube === $clube_fcp) {
    echo "És fruteiro! 🍑 🫒 🍎 🥥 🍋‍🟩 🍏";
} elseif ($clube === $clube_slb) {
    echo "És lampião! 💡";
} elseif ($clube === $clube_scp) {
    echo "És lagarto! 🦎";
} else {
    echo "Clube não identificado 😢";
}

quebra("SWITCH");

echo "Qual o seu clube?";
echo "<br>";

switch($clube) {
    case $clube_faro;
    echo "És farense!";
    break;

    case $clube_fcp;
    echo "És fruteiro! 🍑 🫒 🍎 🥥 🍋‍🟩 🍏";
    break;

    case $clube_slb;
    echo "És lampião! 💡";
    break;

    case $clube_scp;
    echo "És lagarto! 🦎";
    break;

    default:
    echo "Clube não identificado 😢";
}






    
    
    