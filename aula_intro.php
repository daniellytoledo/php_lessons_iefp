<?php

/*  
::::::: OPERADORES ARITMÉTICOS 
/  divisão
*  multiplicação
+  soma
-  subtração
%  resto ou modulus
exemplo: 5%2 = 1, porque 5 dividido por 2 é igual a 2, com resto 1 
** exponenciação
exemplo: 5**2 = 25, porque 5 elevado a 2 é igual a 25


/* :::: OPERADORES DE COMPARAÇÃO  
::::::: OPERADORES DE COMPARAÇÃO 
==       igual (apenas o valor)
!=       diferente (apenas o valor)
===      igual (o valor e o tipo de dados)
!==      diferente (o valor e o tipo de dados)
>
<
>=
<=

::::::: OUTROS OPERADORES
= operador de atribuição
. operador de concatenação */

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

echo "<br>";
echo "<hr>";
echo "<br>";
echo "testando foreach com chave e valor: <br>";
echo "<br>";

foreach($alunos as $chave => $valor) {
    echo "O aluno é o $valor e mora em {$moradas[$chave]}. <br>";
}

echo "<br>";
echo "<hr>";
echo "<br>";
echo "foreach com variável combinada: <br>";
echo "<br>";

$combinado = array_combine($alunos, $moradas);
foreach($combinado as $este_aluno => $esta_morada) {
    echo "O aluno é o $este_aluno que mora em $esta_morada!!!!!!!!1 combinado <br>";
}

echo "<br>";
echo "<hr>";
echo "<br>";
echo "Exercício: <br>";

$pessoas1 = [
    "Ana",
    "Bruno",
    "Carlos",
    "Diana",
    "Eduardo",
    "Filipa",
    "Gonçalo",
    "Helena",
    "Igor",
    "Joana"
];

$profissoes = [
    "Médico",
    "Engenheiro",
    "Professor",
    "Advogado",
    "Designer",
    "Programador",
    "Arquiteto",
    "Enfermeiro",
    "Contabilista",
    "Psicólogo"
];

$moradas1 = [
    "Rua das Flores, 123, Lisboa",
    "Avenida da Liberdade, 45, Lisboa",
    "Rua de Santa Catarina, 78, Porto",
    "Praça da República, 10, Coimbra",
    "Rua 5 de Outubro, 56, Faro",
    "Avenida Central, 22, Braga",
    "Rua do Comércio, 90, Setúbal",
    "Largo da Sé, 5, Évora",
    "Rua do Sol, 33, Aveiro",
    "Avenida dos Aliados, 150, Porto"
];

$pessoas3 = [
    [
        "nome" => "Ana",
        "morada" => "Rua das Flores, 123, Lisboa",
        "profissao" => "Médico"
    ],
    [
        "nome" => "Bruno",
        "morada" => "Avenida da Liberdade, 45, Lisboa",
        "profissao" => "Engenheiro"
    ],
    [
        "nome" => "Carlos",
        "morada" => "Rua de Santa Catarina, 78, Porto",
        "profissao" => "Professor"
    ],
    [
        "nome" => "Diana",
        "morada" => "Praça da República, 10, Coimbra",
        "profissao" => "Advogado"
    ],
    [
        "nome" => "Eduardo",
        "morada" => "Rua 5 de Outubro, 56, Faro",
        "profissao" => "Designer"
    ],
    [
        "nome" => "Filipa",
        "morada" => "Avenida Central, 22, Braga",
        "profissao" => "Programador"
    ],
    [
        "nome" => "Gonçalo",
        "morada" => "Rua do Comércio, 90, Setúbal",
        "profissao" => "Arquiteto"
    ],
    [
        "nome" => "Helena",
        "morada" => "Largo da Sé, 5, Évora",
        "profissao" => "Enfermeiro"
    ],
    [
        "nome" => "Igor",
        "morada" => "Rua do Sol, 33, Aveiro",
        "profissao" => "Contabilista"
    ],
    [
        "nome" => "Joana",
        "morada" => "Avenida dos Aliados, 150, Porto",
        "profissao" => "Psicólogo"
    ]
];

echo "<br>";
echo "1. foreach: <br>";
echo "<br>";
foreach($pessoas1 as $chave => $valor) {
    echo "A pessoa é o(a) $valor, ele(a) é {$profissoes[$chave]} e mora em {$moradas1[$chave]}. <br>";
}

echo "<br>";
echo "2. for: <br>";
echo "<br>";

$qnt_pessoas = count($pessoas1);

for($i=0; $i<$qnt_pessoas; $i++) {
    $esta_pessoa1  = $pessoas1[$i];
    $esta_morada1  = $moradas1[$i];
    echo "A pessoa $esta_pessoa1 que mora em $esta_morada1.<br>";
    // ou apenas o código abaixo que substitui as linhas de cima
    echo "A pessoa é o(a) {$pessoas1[$i]} que mora em {$moradas1[$i]}. <br>";
}

echo "<br>";
echo "<hr>";
echo "<br>";

quebra("ARRAYS provenientes de FORMS");
?>

<form method="POST">
    Nome &nbsp;&nbsp;&nbsp;<input type="text" name="fnome">
    <br><br>
    Morada &nbsp;<input type="text" name="fmorada">
    <br><br>
    Telefone <input type="number" name="ftelefone">
    <br><br>
    <input type="submit" value="Enviar">
</form>

<?php

quebra("ASPAS DUPLAS vs PLICAS");
if($_SERVER['REQUEST_METHOD']=="POST"){
    $nome       = $_POST['fnome'];
    $morada     = $_POST['fmorada'];
    $telefone   = $_POST['ftelefone'];
    echo "O formulário foi enviado por $nome que mora em $morada e tem o telefone nº $telefone";
    echo '<br>';
    // Com aspas singulares (plicas) não funciona da mesma maneira
    echo 'O formulário foi enviado por $nome que mora em $morada e tem o telefone nº $telefone';
    echo '<br>';
    echo 'O formulário foi enviado por '.$nome.' que mora em '.$morada.' e tem o telefone nº '.$telefone;
}

quebra("CONTINUE e BREAK");

for($i=0;$i<20;$i++){
    if($i>=5 && $i<=7){
        continue;   // salta este ciclo
    }
    if($i>12){
        break;      // termina o loop
    }
    if($i%2==0){
        echo "Nº $i é par <br>";
    }else{
        echo "Nº $i é ímpar <br>";
    }
}

quebra("FUNÇÕES");

$var1="Batatas";
$var2="";
$var3;
$var4=null;
$var5=6;
$var6=0;

echo isset($var1)?"Está definida":"Não está definida";
echo '<br>';
echo isset($var2)?"Está definida":"Não está definida";
echo '<br>';
echo isset($var3)?"Está definida":"Não está definida";
echo '<br>';
echo isset($var4)?"Está definida":"Não está definida";
echo '<br>';
echo isset($var5)?"Está definida":"Não está definida";
echo '<br>';
echo isset($var6)?"Está definida":"Não está definida";
echo '<br>';
echo isset($var7)?"Está definida":"Não está definida";
echo '<br>';
echo "isset() apenas devolve FALSE em variáveis não existentes ou com valor NULL";
echo '<br><br>';

echo empty($var1)?"Está vazia":"Não está vazia";
echo '<br>';
echo empty($var2)?"Está vazia":"Não está vazia";
echo '<br>';
echo empty($var3)?"Está vazia":"Não está vazia";
echo '<br>';
echo empty($var4)?"Está vazia":"Não está vazia";
echo '<br>';
echo empty($var5)?"Está vazia":"Não está vazia";
echo '<br>';
echo empty($var6)?"Está vazia":"Não está vazia";
echo '<br>';
echo empty($var7)?"Está vazia":"Não está vazia";
echo '<br>';
echo "empty() apenas devolve TRUE em variáveis com string vazia '''', NULL, com valor zero e inexistentes";
echo '<br><br>';

echo $var1?"Verdadeiro":"Falso";
echo '<br>';
echo $var2?"Verdadeiro":"Falso";
echo '<br>';
echo $var3?"Verdadeiro":"Falso";
echo '<br>';
echo $var4?"Verdadeiro":"Falso";
echo '<br>';
echo $var5?"Verdadeiro":"Falso";
echo '<br>';
echo $var6?"Verdadeiro":"Falso";
echo '<br>';
echo $var7?"Verdadeiro":"Falso";
echo '<br>';
echo "o teste da variável devolve FALSO quando a variável é uma string vazia '''', quando é NULL, quando é zero, e quando é inexistente. CUIDADO: neste último caso o PHP lança um aviso, mas ainda considera FALSO";
echo '<br><br>';

echo is_null($var1)?"Verdadeiro":"Falso";
echo '<br>';
echo is_null($var2)?"Verdadeiro":"Falso";
echo '<br>';
echo is_null($var3)?"Verdadeiro":"Falso";
echo '<br>';
echo is_null($var4)?"Verdadeiro":"Falso";
echo '<br>';
echo is_null($var5)?"Verdadeiro":"Falso";
echo '<br>';
echo is_null($var6)?"Verdadeiro":"Falso";
echo '<br>';
echo is_null($var7)?"Verdadeiro":"Falso";
echo '<br>';
echo "o is_null() da variável devolve VERDADEIRO quando o valor é NULL ou a variável não existe (embora neste caso lance um aviso)";
echo '<br><br>';



quebra("FUNÇÕES DE BASES DE DADOS - PDO");

$server = "localhost";
$bd     = "rentacar";
$user   = "root";
$pass   = "";

$opcoes = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false
];
$dsn = "mysql:host=$server;dbname=$bd;charset=utf8";

try {
    // 1º criar uma conexão
    $conexao = new PDO(
        $dsn,
        $user,
        $pass,
        $opcoes
    );

}catch(PDOException $erro){
    echo "Erro na ligação: " . $erro->getMessage();
}

// 2º definir uma query para a BD
$sql = "SELECT * FROM clientes LIMIT 1";

// 3º enviar a query para a BD e "apanhar" a resposta
$stmt = $conexao->query($sql);

// 4º transformar a resposta num array associativo
$resultado = $stmt->fetch();

echo $resultado['nome'].", com a carta de condução ".$resultado['carta_c']." e o NIF ".$resultado['nif'];

echo '<br><br><br><br>';

// Outro exemplo: vários resultados
$sql = "SELECT * FROM clientes";
$stmt = $conexao->query($sql);
$resultado = $stmt->fetchAll();

foreach($resultado as $cliente){
    $nome = $cliente['nome'];
    $cc   = $cliente['carta_c'];
    $nif  = $cliente['nif'];

    echo "<p style='background-color:lightgreen;'>$nome, com a carta de condução $cc e o NIF $nif</p>";
}
echo '<br><br><br><br><br><br><br>';
echo "Fim do código";
?>




    
    
    