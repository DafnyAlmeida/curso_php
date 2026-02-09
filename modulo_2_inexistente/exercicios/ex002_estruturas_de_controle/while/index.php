<?php 
$num = 1;

while ($num < 11) {
    echo "$num";
    echo "<br>";
    $num++;
}

echo "<br>";
$ale = mt_rand(1, 10);
while ($ale != 7) {
    $ale = mt_rand(1, 10);
    echo "$ale";
    echo "<br>";
}

echo "<br>";

$cont = 0;
$num2ex = 0;
$num2 = $num2ex;

if ($num2ex == 1 or $num2ex == 0) {
    $cont = 1;
} else {
    while ($num2 > 0) {
        $num2 = intdiv($num2, 10);
        $cont++;
    }
}

echo "O número $num2ex tem $cont dígitos";

