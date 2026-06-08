<?php

function quebra($legenda)
{
    echo "<br><hr>:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: $legenda <hr><br>";
}

quebra("<strong>AVALIAÇÃO UFCD 00245 – Desenvolver algoritmos</strong>");

echo "Aluno(a): Danielly Toledo <br>";

quebra("Questão 1:");

$idade1 = 25;
$idade2 = 18;

if ($idade1 === $idade2) {
    echo "A primeira pessoa tem a mesma idade que a segunda. Ambos com $idade1 anos.<br>";
} elseif ($idade1 > $idade2) {
    echo "A primeira pessoa é mais velha que a segunda. A primeira tem $idade1 anos e a segunda tem $idade2 anos.<br>";
} else {
    echo "A primeira pessoa é mais nova que a segunda, tendo $idade1 anos e a segunda $idade2 anos.<br>";
}

quebra("Questão 2:");

$clube          = "porto";
$clube_porto    = "porto";
$clube_sporting = "Sporting";
$clube_benfica  = "benfida";

// Benfica tem 38 títulos
// o Porto tem 31 títulos
// Sporting tem 21 títulos

echo "Qual clube você acha que tem mais títulos?<br><br>";

if ($clube === $clube_porto) {
    echo "Perto, mas errou! O clube com mais títulos é o Benfica com 38, enquanto Porto tem 31.<br>";
} elseif ($clube === $clube_sporting) {
    echo "Essa foi longe, bem longe! O Sporting tem 21 títulos e o clube com mais títulos é o Benfica.<br>";
} elseif ($clube === $clube_benfica) {
    echo "Correto!!!!!! O Benfica tem 38 títulos, Porto tem 31 e o Sporting 21.<br>";
} else {
    echo "Clube não registrado. Escolha Benfica, Porto ou Sporting.<br>";
}

quebra("Questão 3:");

$alunos = ["Margarida", "Tiago", "Beatriz", "Rodrigo", "Inês"];

for ($i = 0; $i < 3; $i++) {
    echo "Este(a) aluno(a) se chama $alunos[$i].<br>";
}

echo "<br><hr><br>";

$posicao = count($alunos);

for ($i = 1; $i < $posicao; $i++) {
    echo "$i º: $alunos[$i]. <br>";
}

quebra("Questão 4:");

$nomes   = ["Sofia", "Diogo", "Marta", "Luís", "Catarina"];
$cidades = ["Faro", "Lisboa", "Porto", "Braga", "Évora"];

$qnt_array = count($nomes);

for ($i = 0; $i < $qnt_array; $i++) {
    echo "$nomes[$i] mora na cidade de $cidades[$i].<br>";
}

quebra("Questão 5:");

$funcionarios = [
    ["nome" => "Rita",   "departamento" => "Contabilidade",    "salario" => 1200],
    ["nome" => "Marco",  "departamento" => "Informática",      "salario" => 1800],
    ["nome" => "Vera",   "departamento" => "Recursos Humanos", "salario" => 1500],
    ["nome" => "Fábio",  "departamento" => "Informática",      "salario" => 2100],
    ["nome" => "Leonor", "departamento" => "Contabilidade",    "salario" => 1350],
];

foreach ($funcionarios as $pessoa) {
    $nome          = $pessoa['nome'];
    $departamento  = $pessoa['departamento'];
    $salario       = $pessoa['salario'];

    echo "$nome trabalha no departamento de $departamento e aufere $salario €.<br>";
}

quebra("Questão 6:");

// triplo

echo "Triplo:<br>";

function triplo($n)
{
    $triplo = $n * 3;
    return "O triplo do número $n é: $triplo .<br>";
}

echo triplo(10);

echo "<br><hr><br>";

// par ou ímpar

echo "Par ou Ímpar:<br>";

function ParOuImpar($n)
{
    if ($n % 2 == 0) {
        echo "O número $n é par.<br>";
    } else {
        echo "O número $n é ímpar.<br>";
    }
}

echo ParOuImpar(11);

echo "<br><hr><br>";

// média

echo "Média:<br>";

function media($a, $b, $c) {
    $media = ($a + $b + $c) / 3;
    return "A média entre $a, $b e $c é de: " . number_format($media, '2', ',', '.') . ".<br>";
}

echo media(10, 3, 30);

quebra("Questão 7:<br>");

function classificarNota($nota) {

    // verificar se $nota NÃO ! é um valor número
    if (!is_numeric($nota)) {
        return "Erro! A nota deve ser um valor número.";
    }

    // verificar se a nota está entre 0 e 20
    if ($nota <0 || $nota >20) {
        return "A nota deve ser entre 0 e 20 valores.";
    }

    // classificação
    if ($nota >= 17) {
        return "Muito bom!<br>";
    } elseif ($nota >= 14 || $nota <= 16) {
        return "Bom.<br>";
    } elseif ($nota >= 10 || $nota <= 13) {
        return "Suficiente.<br>";
    } elseif ($nota <10) {
        return "Insuficiente.<br>";
    }
}

echo "Resultado da nota:<br>";

echo classificarNota(15);

quebra("Questão 8:");

function nomeFormatado($nome, $apelido) {
    return strtoupper($nome . " " . $apelido);
}

echo "Em maiúsculo:<br>";

echo nomeFormatado("Danielly", "Toledo");

echo "<br>";
quebra("FIM");