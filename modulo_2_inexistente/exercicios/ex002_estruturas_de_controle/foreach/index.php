<?php
$lista = ["Wilson", "Ivens", "Arthur", "Eduarda", "Luna"];
foreach ($lista as $nomes) {
    echo "$nomes";
    echo "<br>";
} 

$dict = [
    "nome" => "Dafny",
    "idade" => 16,
    "ID" => 1
];

foreach ($dict as $chave => $valor) {
    echo "$chave: $valor";
    echo "<br>";
}

$precos = [10, 25.5, 7, 100, 3.99];

foreach ($precos as $i => $valor) {
    $precos[$i] = $valor * 0.2;
}

echo "A lista com os valores redefinidos fica: ";
print_r($precos);

