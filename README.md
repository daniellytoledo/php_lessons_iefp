# 🚀 Aprendendo PHP - Arrays, Loops e Funções

Este projeto é um estudo prático dos conceitos fundamentais do PHP, incluindo arrays, estruturas de repetição, variáveis, funções...

## 📚 Conceitos Aprendidos

### 1. 🧮 Arrays
- Arrays indexados
- Arrays associativos  
- Arrays multidimensionais
- Operações com arrays

### 2. 🔄 Loops e Estruturas de Repetição
- `for` - loop com contador
- `foreach` - loop específico para arrays
- `while` - loop condicional
- `do-while` - loop que executa pelo menos uma vez

### 3. 📦 Variáveis
- Declaração e atribuição
- Variáveis combinadas (arrays)
- Escopo de variáveis
- Concatenação e interpolação

### 4. ⚙️ Funções
- Funções nativas do PHP
- Criação de funções personalizadas
- Parâmetros e retornos
- Funções de array (`count()`, `array_combine()`, etc.)

## 💻 Exemplos de Código

### Arrays Indexados
```php
$pessoas = ["Ana", "Bruno", "Carlos", "Diana"];
echo $pessoas[0]; // Ana

### Arrays Associativos
```php
$pessoa = [
    "nome" => "João",
    "idade" => 25,
    "cidade" => "Lisboa"
];
echo $pessoa["nome"]; // João

### Loop for
$frutas = ["Maçã", "Banana", "Laranja"];
for($i = 0; $i < count($frutas); $i++) {
    echo $frutas[$i] . "<br>";
}

### Loop foreach
$cores = ["Vermelho", "Azul", "Verde"];
foreach($cores as $cor) {
    echo $cor . "<br>";
}

// Com chaves
foreach($pessoa as $chave => $valor) {
    echo "$chave: $valor<br>";
}

### Loop while
$contador = 1;
while($contador <= 5) {
    echo "Número: $contador<br>";
    $contador++;
}
