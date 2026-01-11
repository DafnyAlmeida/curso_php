<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações</title>

    <style>
        p, li {
            font-size: 1.15em;
        }

        span {
            font-weight: 700;
        }
        
    </style>
</head>

<body>
    <h1>Operadores em PHP</h1>
    <?php
    /* No JS ao somar "2" + "2" o resultado seria "22" pois o sinal de mais tem uma sobrecarga de funções servindo para somar e para concatenar. Já no PHP o sinal de mais tem apenas uma função: somar, fazendo com que ele converta str para int e se ele não conseguir dará erro / sendo o operador de concatenação o . */
    $n = "2";
    $n2 = "2";
    $r = "2" + "2";

    echo "$r";

    echo "<br>";

    echo '2' + '2';

    echo "<br>";

    var_dump($r);

    ?>

    <h3>Operadores Aritméticos</h3>
    <ul>
        <li>
            +
            <span>| Adição</span>
        </li>
        <li>
            -
            <span>| Subtração</span>
        </li>
        <li>
            *
            <span>| Multiplicação</span>
        </li>
        <li>
            /
            <span>| Divisão</span>
        </li>
        <li>
            %
            <span>| Modulo</span>
        </li>
        <li>
            **
            <span>| Exponenciação</span>
        </li>
    </ul>
    <p>A oredem de precedencia para os operadores é a seguinte:</p>
    <ul>
        <li>Potencia</li>
        <li>Multiplicação, divisão, modulo (feitas na ordem)</li>
        <li>Adição e multiplicação (feitas na ordem)</li>
    </ul>
    <?php 
    echo "O resultado para 50/2 + 3**2 é: " . 50/2 + 3**2;

    echo (20 + 2) + (20/2) * 2;
    ?>
    <p>Para pudar a oredem adicione parenteses</p>

</body>

</html>