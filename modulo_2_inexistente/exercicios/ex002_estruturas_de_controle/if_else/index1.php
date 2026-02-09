<?php

// Ou usar while para fazer desenhos (triângulo, quadrado, etc)?
// readline()

// IF / ELSE / ELSEIF - EXERCICIOS
// 01 - fácil

$num = 10;

if ($num < 0) {
    echo "O número $num é negativo";
} elseif ($num > 0) {
    echo "O número $num é positivo";
} else {
    echo "O número $num é igual a zero";
}

$idade = 23;

if ( 0 < $idade && $idade >= 12) {
    echo "Criança";
} elseif (13 <= $idade && $idade <= 17) {
    echo "Adolescente";
} elseif (18 <= $idade && $idade <= 59) {
    echo "Adulto";
} elseif ($idade >= 60) {
    echo "Idoso";
}

