# Arrays Associativos em PHP

## O que é um Array Associativo?

Um array associativo em PHP é um tipo de array onde as chaves são strings, em vez de números inteiros. Ele permite associar valores a nomes descritivos, tornando o código mais legível e organizado.

## Sintaxe para Criação de Arrays Associativos

A sintaxe básica para criar um array associativo é:

```php
$nome_do_array = [
    "chave1" => "valor1",
    "chave2" => "valor2",
    "chave3" => "valor3"
];
```

## Exemplos de Uso

### Exemplo 1: Criando e Acessando um Array Associativo

```php
$produto = [
    "id" => 12366,
    "valor" => 25.5,
    "descricao" => "Sabão"
];

echo "id: " . $produto["id"] . PHP_EOL;
echo "valor: " . $produto["valor"] . PHP_EOL;
echo "descrição: " . $produto["descricao"] . PHP_EOL;
```

### Exemplo 2: Iterando sobre um Array Associativo

```php
$produto = [
    "nome" => "Notebook",
    "preco" => 3500.00,
    "estoque" => 15
];

foreach ($produto as $chave => $valor) {
    echo "$chave: $valor" . PHP_EOL;
}
```

### Exemplo 3: Modificando Valores em um Array Associativo

```php
$carro = [
    "marca" => "Toyota",
    "modelo" => "Corolla",
    "ano" => 2020
];

$carro["ano"] = 2021; // Atualizando o ano
echo "Ano atualizado: " . $carro["ano"] . PHP_EOL;
```

### Exemplo 4: Verificando se uma Chave Existe

```php
$usuario = [
    "nome" => "Maria",
    "email" => "maria@example.com"
];

if (array_key_exists("email", $usuario)) {
    echo "O email do usuário é: " . $usuario["email"] . PHP_EOL;
} else {
    echo "O usuário não possui um email cadastrado." . PHP_EOL;
}
```

## Conclusão

Arrays associativos são uma ferramenta poderosa em PHP para organizar dados de forma clara e eficiente. Eles são amplamente utilizados em aplicações para armazenar informações estruturadas, como dados de usuários, configurações e muito mais.
