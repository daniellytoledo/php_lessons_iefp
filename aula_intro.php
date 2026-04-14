<?php

function quebra($legenda) {
    echo "<br><hr>:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: $legenda <hr><br>";
}

quebra("ARRAYS parte 1");

$var1;
$var2    = 14.5;
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

$clube      = "fcp";
$clube_faro = "scf";
$clube_fcp  = "fcp";
$clube_slb  = "slb";
$clube_scp  = "scp";

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

echo "<br>";

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

echo "<br>";

quebra("MATCH");

echo "Qual o seu clube?";
echo "<br>";

echo match($clube) {
    "scf"       => "Tu es farense!",
    "scp"       => "Tu es lagarto!",
    "slb"       => "Tu es lampião!",
    "fcp"       => "Tu és tripeiro",
    default     => "Clube não identificado!"
};

quebra("CICLOS - WHILE");

$array = [
    "Eduarda",
    "Anderson",
    "Miguel",
    "Afonso",
    "Amoretty",
    "Elisabete",
    "Walter",
    "Géssica",
    "Dani"
];

$qnt_array = count($array); // variável para contar quantos elementos tem no array pra poder usar no while, sem precisar contar "manualmente" quantos elementos tem no array. ou usar a própria função dentro do while como - while ($contador < count($array))

$contador = 0;

while($contador < $qnt_array) {
    echo $array[$contador];
    echo "<br>";
    echo "O contador está em $contador <br>";
    $contador++;
}

quebra("CICLOS - FOR");

$alunos  = ["Afonso", "Anderson", "António", "Miguel", "Bruno"];
$moradas = ["Areal Gordo", "Faro", "Quinta do Lago", "Montenegro", "Faro"];
$qnt     = count($alunos);

for($i=0; $i<$qnt; $i++) {
    $este_aluno  = $alunos[$i];
    $esta_morada = $moradas[$i];
    echo "O aluno é o $este_aluno que mora em $esta_morada.<br>";
    // ou apenas o código abaixo que substitui as linhas acima
    echo "O aluno é o {$alunos[$i]} que mora em {$moradas[$i]}. <br>";
}

foreach($alunos as $chave => $valor) {
    echo "O aluno é o $valor que mora "; // CONTINUAR
}

$combinado = array_combine($alunos, $moradas);
foreach($combinado as $este_aluno => $esta_morada) {
    echo "O aluno é o $este_aluno que mora em $esta_morada!!!!!!!!1 combinado <br>";
}

quebra("ARRAYS provenientes de FORMS");





    
    
    