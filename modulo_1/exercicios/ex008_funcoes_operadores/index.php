<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <h1>Funções em PHP</h1>
    <?php 
    // FUNÇÕES

    // ABS()
    /* Retorna o valor absoluto de um número, que é a distância dele até o zero, sem considerar o sinal (é o valor em módulo). */
    $r = abs(-500);
    print("A resposta é $r");

    echo "<br>";

    // BASE_CONVERT()
    /* Coverte qualquer número de uma base para outra. Na primeira posição vai o número, depois a base na qual ele esta e depois a base que você quer converter */
    $base = base_convert(254, 10, 2);
    echo "254 em binario é $base";

    // ARREDONDAMENTO => ceil(), floor(), round()
    /* Ceil() arredonda para cima, floor() arredonda para baixo e round() é o arredondamento normal */


    // HYPOT()
    /* Serve para calcular a hipotenusa de um triangulo retangulo, passa dois catetos e ele mostra a hipotenusa */

    // INTDIV()
    /* Retorna a divisão inteira (é o // np python) */

    echo "<br>";

    $div = intdiv(5, 2);
    echo "O resultado é $div";

    //MIN(), MAX()
    /* Retorna o menor e o maior valor */

    echo "<br>";

    $lista = [10, 34, 9, 5, 8, 4, 60];
    $r = min($lista);
    echo "O menor valor é $r";

    echo "<br>";

    $r = max($lista);
    echo "O maior valor é $r";

    // PI()
    // Retorna o valor de pi

    echo "<br>";

    $pi = pi();
    $pi = M_PI; // É uma constante já declarada do PHP que contem o valor de pi
    echo "O valor de pi é $pi";

    // POW()
    /* Antigamente se usava para calcular potencia. Coloca o número e depois o expoente */

    // TRIGONOMETRICAS => sin(), cos(), tan()
    /* Retornam o seno o cosseno e a tagente */

    // SQRT()
    /* <Calcula a raiz QUADRADA (apenas) de um número */
    echo "<br>";

    $r = sqrt(25);
    echo "O resultado é $r";

    ?>
    
</body>
</html>