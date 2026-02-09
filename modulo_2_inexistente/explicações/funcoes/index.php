<?php

// Ex.001 - Parametros por referencia

$num = 0;

function somar(&$parametro) {
    $parametro++;
}

somar($num);

echo "$num";

echo "<br>";

// Ex.002 - Parametro padrão

function lanches($padrao = "tapioca") {
    echo "Nós temos $padrao";
    echo "<br>";
}

lanches("bolo");
lanches(null);
lanches();

// Ex.003 - Ordem dos argumentos
function fazeriogurte($preco, $sabor, $recipiente = "tigela") {
    return "Fazendo um(a) $recipiente de iogurte de $sabor pelo preço de $preco.\n";
} // um argumento com valor padrão tem que vir depois dos obrigatorios

echo fazeriogurte("framboesa", null); // "framboesa" é o valor para $recipiente
echo fazeriogurte(sabor: "framboesa", preco: 25.5);

echo "<br>";

// Ex.004 - Número indefinido de argumentos

function somarlista(int ...$numeros) { // Com isso é possivel definir o tipo de um argumento
    $total = 0;
    foreach ($numeros as $valor) {
        $total += $valor;
    }
    echo $total;
}

somarlista(12, 56, 89, 90);