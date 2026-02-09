<?php

function maiorMenor(int ...$numeros) {

    $maior = max($numeros);
    $menor = min($numeros);

    echo "O maior valor é $maior e o menor é $menor";
}

maiorMenor(12, 67, 78, 90, 234);


echo "<br>";


function quanti(int ...$lista) {
    $cont = 0;
    foreach ($lista as $valor) {
        $cont++;
    }

    echo "A quantidade de números é $cont";
}

quanti(12, 34, 67, 89);


echo "<br>";


function primo(int $numero) {
    if ($numero == 1) {
        echo "Número invalido!";
        return;
    }

    $raiz = sqrt($numero);
    $primo = false;

    for ($i = 2; $i <= $raiz; $i++) {
        if ($numero % $i == 0) {
            $primo = false;
            break;
        } else {
            $primo = true;
        }
    }

    if ($primo) {
        echo "O número $numero é primo";
    } else {
        echo "O número $numero não é primo";
    }
}

primo(223);


echo "<br>";


function vogais(string $palavra) {
    $cont = 0;
    $palavraForma = strtolower($palavra);
    $vogais = ["a", "e", "i", "o", "u"];
    for ($i = 0; $i < strlen($palavraForma); $i++) {
        if (in_array($palavraForma[$i], $vogais)) {
            $cont++;
        } 
    }

    echo "A palavra $palavra tem $cont vogais";
}

vogais("Larissa");


echo "<br>";

function calcular(string $opera = "adicao", int $num1, int $num2) {
    $opera = mb_strtolower($opera, "UTF-8");
    $opera = iconv("UTF-8", "ASCII//TRANSLIT", $opera);

    switch ($opera) {
        case "adicao":
            echo $num1 + $num2;
            break;
        case "subtracao":
            echo $num1 - $num2;
            break;
        case "multiplicacao":
            echo $num1 * $num2;
            break;
        case "divisao":
            echo $num1 / $num2;
            break;
        default:
            echo "Opção invalida";
            return;
    }
}

calcular("divisao", 12, 2);

echo "<br>";

function somar(int ...$numeros) {
    $total = 0;

    foreach ($numeros as $valor) {
        $total += $valor;
    }

    echo "A soma dos valores é $total";
}

somar(12, 90, 55);


echo "<br>";

// Função anonima aplicada a cada valor de um array
$formatar = function (string $texto) {
    $texto = mb_strtolower($texto, "UTF-8");
    return $texto = iconv("UTF-8", "ASCII//TRANSLIT", $texto);
};

function varios(array $palavras, callable $funcao) {
    foreach ($palavras as $palavra) {
        echo $funcao($palavra);
    }
}

varios(["Dafny", "Vitória"], $formatar);

echo "<br>";

// Type int e retorno tipado - é uma função que cria funções

function criarMulti(int $multi): callable {
    return function (int $num) use ($multi): int {
        return $num * $multi;
    };
}

$dobro = criarMulti(2);

echo $dobro(2);