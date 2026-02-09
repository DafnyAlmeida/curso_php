<?php

do {
    $num = mt_rand(1, 10);
    echo "Gerando...";
    echo "<br>";
    echo "Número gerado: $num";
    echo "<br>";

} while ($num > 8);

$cont = 0;
do {
    $cont++;
    echo "$cont";
    echo "<br>";
} while ($cont < 50);


$cont2 = 0;

do {
    $num2 = mt_rand(1, 10);
    echo "O número gerado foi: $num2";
    echo "<br>";
} while ($num2 != 10);

echo "Parabéns você venceu!";