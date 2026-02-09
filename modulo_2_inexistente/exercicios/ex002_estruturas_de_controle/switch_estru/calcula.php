<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Calculadora com Switch</title>
</head>
<body>
    <?php 
    $opera = $_GET["opera"] ?? 0;
    $num1 = $_GET["num1"] ?? 0;
    $num2 = $_GET["num2"] ?? 0;
    $resul = 0;

    switch ($opera) {
        case 1:
            $resul = $num1 + $num2;
            $opera = "adição";
            break;
        case 2:
            $resul = $num1 - $num2;
            $opera = "subtração";
            break;
        case 3:
            $resul = $num1 * $num2;
            $opera = "multiplicação";
            break;
        case 4:
            $resul = $num1 / $num2;
            $opera = "divisão";
            break; 
    }
    
    ?>
    <main>
        <h1>Bem-vindo a calculadora</h1>
        <p>Escolha uma das opções abaixo:</p>
        <ul>
            <li>1 - Adição</li>
            <li>2 - Subtração</li>
            <li>3 - Multiplicação</li>
            <li>4 - Divisão</li>
        </ul>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="opera">Escolha uma operação:</label>
            <input type="number" name="opera" id="opera" min="1" max="4" value="<?= $opera ?>">

            <label for="num1">Digite o primeiro número:</label>
            <input type="number" name="num1" id="num1" step="any" value="<?= $num1 ?>">

            <label for="num2">Digite o segundo número:</label>
            <input type="number" name="num2" id="num2" step="any" value="<?= $num2 ?>">

            <input type="submit" value="Calcular">
        </form>
    </main>
    <main>
        <h2>Resultado</h2>
        <p>
            <?php 
            echo "O resultado obtido a partir da $opera de $num1 e $num2 foi: <br>" . number_format($resul, 2, ",", ".") . "</br>";
            ?>
        </p>
    </main>
    
</body>
</html>