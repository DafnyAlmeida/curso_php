<?php
    // Forma longa de definir um array
    $lista1 = array(true, 12, "Dafny", 7.5);

    // Forma curta de definir um array
    $lista2 = [true, 12, "Dafny", 7.5];
    var_dump($lista1, $lista2);

    echo "<br>";

    // Array Indexado
    $animais = ["Wilson", "Arthur"];
    echo $animais[1];
    $animais[3] = "Ivens";
    $animais[] = "Vini";
    print_r($animais);

    echo "<br>";

    $negativo = [];
    $negativo[-3] = "calor";
    $negativo[] = "escola";
    $negativo[-5] = "solidão";
    $negativo[] = "visitas";
    print_r($negativo);

    echo "<br>";

    // Arrays associativos

    // Chaves não se repetem, e só podem ser str ou int. Todos os outros tipos serão convertidos

    $array_associ = [
        1    => "a",
        "1"  => "b",
        1.5  => "c",
        true => "d",
    ];

    var_dump($array_associ);

    echo "<br>";

    // Um dict não precisa obrigatoriamente ter todas as suas chaves definidas, de forma que alguns valores podem não ter chave e outros sim
    $lista = [
        "nome" => "Dafny",
        "idade" => 16,
        "estudante"
    ];

    var_dump($lista);

    echo "<br>";
    // E ao não ter chave definida o proximo valor na lista tera o index do maior valor numerico + 1
    $lista = [
        "a",
        "b",
        "c",
        6 => "d",
        "e"
    ];

    var_dump($lista);

    // Acessando elementos do Array
    $array = [
        "foo" => "bar",
        42 => 24,
        "multi" => [
            "dimensional" => ["array" => "foo"]
        ]
    ];

    echo "<br>";
    var_dump($array["foo"]); // bar
    echo "<br>";
    var_dump($array[42]); // 24
    echo "<br>";
    var_dump($array["multi"]); // array
    echo "<br>";
    var_dump($array["multi"]["dimensional"]); //array
    echo "<br>";
    var_dump($array["multi"]["dimensional"]["array"]); // foo

    echo "<br>";

    // Desconstruindo Array - desmontar em variaveis

    $lista = [16, "Dafny", 9988534276];
    
    [$idade, $nome, $tel] = $lista;

    echo "Olá, meu nome é $nome, tenho $idade anos e esse é meu telefone $tel";

    echo "<br>";

    $lista = [
        "idade" => 16,
        "nome" => "Dafny",
        "tel" => 9988534276
        ];
    
    ["nome" => $nome, "idade" => $idade, "tel" => $tel] = $lista;
    
    echo "Olá, meu nome é $nome, tenho $idade anos e esse é meu telefone $tel";

    echo "<br>";

    // Funções uteis

    // array_values() - Sempre retorna os VALORES de um array, de forma que em um array associativo não pega as chaves

    $lista = [
        "nome" => "Dafny",
        "idade" => 16,
        "tel" => 9988534276
        ];

    $valores = array_values($lista);

    print_r($valores);

    echo "<br>";

    // unset() - funciona como um delete, apagando coisas ou as removendo

    unset($lista["nome"]);
    print_r($lista);

    echo "<br>";

    // sort() - ordena em oredem crescente em arrays simples. Em associativos ele apaga as chaves
    $numeros = [1, 45, 8, 6 , 0, 65];
    sort($numeros);
    print_r($numeros);

    echo "<br>";

    // count() - retorna o numero de valores dentro de um array, ignora chaves
    $nomes = ["Ana", "Lucas", "Pedro"];
    echo count($nomes);

    echo "<br>";

    // array_push() - adiciona ao final
    // array_unshift() - adiciona no inicio
    // array_pop() - remove do final
    // array_shift() - remove do inicio

    // in_array() - verifica se um valor esta em um array
    $pessoa = [
    "nome" => "Dafny",
    "idade" => 16
    ];

    in_array("Dafny", $pessoa);

    // implode() - serve para transformar array em str e você é capaz de definir o separador entre os valores

    $pessoa = [
        "nome" => "Dafny",
        "idade" => 16,
        "curso" => "PHP"
    ];

    echo implode(" | ", $pessoa);

    echo "<br>";

    // explode() - transforma str em array, primeiro é colocado o separador da str e depois a variavel que a guarda

    $texto = "maçã,banana,uva";
    $frutas = explode(",", $texto);

    print_r($frutas);

    echo "<br>";

    // Adicionar varios elementos a um array de uma vez

    $a = [1, 2, 3];
    $b = [4, 5];

    $c = [...$a, ...$b, 6];

    print_r($c);

    $pessoa = [
    "nome" => "Ana"
    ];

    $pessoa = [
        ...$pessoa,
        "idade" => 20,
        "cidade" => "São Paulo",
        "curso" => "PHP"
    ];

    // array_map() - pega todos os itens de uma lista e aplica neles a mesma coisa, como uma função

    // variavel que recebe os valores alterados = array_map(função, variavel que tem os valores que vão ser modificados);

    $numeros = [1, 2, 3, 4];

    $dobrados = array_map(function($n) {
        return $n * 2;
    }, $numeros);

    print_r($dobrados);

// array_filter()

// array_reduce()

// Iteradores (ArrayIterator)

// Coleções (no Laravel você usa muito isso)









