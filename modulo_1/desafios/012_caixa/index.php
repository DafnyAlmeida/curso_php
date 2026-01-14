<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Caixa eletrônico</title>
</head>
<body>
    <?php 
    $valor = $_GET["valor"] ?? 0; // ex: 185
    $cem = (int) ($valor / 100); // 1 - 
    $valor = $valor - $cem * 100; // sobra 85
    $cinquen = intdiv($valor, 50); // 1
    $valor = $valor - $cinquen * 50; // sobra 35
    $vinte = intdiv($valor, 20); // valor
    $valor = $valor - $vinte * 20; // 15 
    $dez = intdiv($valor, 10); // 1
    $valor = $valor - $dez * 10; // 5
    $cinco = intdiv($valor, 5); // 1

    ?>
    <header>
        <h1>Caixa eletrônico</h1>
    </header>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor">Valor que deseja retirar:</label>
            <input type="number" name="valor" id="valor" value="<?= $valor ?>" step="5">

            <input type="submit" value="Retirar">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>Você ira retirar as seguintes notas:</p>
        <?php 
        echo "<ul>
            <li>
                <img src='img/100-reais.jpg' alt='cem reais'>
                <span>$cem notas de cem</span>
            </li>
            <li>
                <img src='img/50-reais.jpg' alt='cinquenta reais'>
                <span>$cinquen notas de cinquenta</span>
            </li>
            <li>
                <img src='img/20-reais.jpg' alt='vinte reais'>
                <span>$vinte notas de vinte</span>
            </li>
            <li>
                <img src='img/10-reais.jpg' alt='dez reais'>
                <span>$dez notas de dez</span>
            </li>
            <li>
                <img src='img/5-reais.jpg' alt='cinco reais'>
                <span>$cinco notas de cinco</span>
            </li>
        </ul>"
        ?>
    </section>
</body>
</html>