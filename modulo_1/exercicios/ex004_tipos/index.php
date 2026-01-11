<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>
<body>
    <!-- Existem tres tipos de tipos:
     - Escalares
     - Compostos
        - Array
        - Object
     - Especiais
        - null
        - resource
        - callabe
        - mixed (é tudo essa porra, é literal uma variavel)
    -->
    <h2>
        Tipos primitivos escalares
    </h2>
    <p>Temos string, float (double), integer (int) e bool (boolean)</p>

    <?php

    // 0x = hexa / 0b = binario/ 0 = octal

    $num = 300;
    $hexa = 0x1A;
    echo "O valor da variável é $num";
    echo "O valor da variável em hexadecimal é {$hexa}";

    $t_f = true;
    $nome = "Vilma";
    $idade = 58;
    $quebrado = 25.5;
    $negativo = -20;
    $vazio = "";
    $potencia = (int) 3e2; // 3 x 10^2

    // A função var_dump serve para exibir todas as informações a respeito de uma variável

    echo "<br>";
    var_dump($hexa);
    echo "<br>";
    var_dump($potencia);
    echo "<br>";
    var_dump($negativo);

    /* Quando uso potencia em PHP o tipo do resultado é double, mas posso forçalo a ser int */

    $casado = false;
    echo "O valor para casado é $casado";

    echo "<br>";

    $casado = true;
    echo "O valor para casado é $casado";

    /* O PHP segue como regra o padrão de que true é lido como 1 e false é ausencia de algo (vazio) */

    echo "<br>";

    $vetor = [1, 2.5, "Maria", true];
    var_dump($vetor);

    echo "<br>";

    class Pessoa {
        private string $nome;
    }

    $p = new Pessoa;
    var_dump($p);

    ?>
    
</body>
</html>