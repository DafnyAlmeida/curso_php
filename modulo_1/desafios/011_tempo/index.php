<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=100.0">
    <link rel="stylesheet" href="style.css">
    <title>Tempo</title>
</head>

<body>
    <?php
    $segundos = $_GET["segundos"] ?? 0;
    $minutos = intdiv($segundos, 60);
    $horas = intdiv($minutos, 60);
    $dias = intdiv($horas, 24);
    $semanas = intdiv($dias, 7);

    $sobra_segun = $segundos - $minutos * 60;
    $minutos = $minutos - $horas * 60;
    $horas = $horas - $dias * 24;
    $dias %= 7;
    ?>
    <header>
        <h1>Convertor de tempo</h1>
    </header>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="segundos">Me informe um tempo em segundos:</label>
            <input type="number" name="segundos" id="segundos" value="<?= $segundos ?>">

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>
            <?php
            echo "<p>O resultado obtido a partir da conversão de " . number_format($segundos, 2, ",", ".") . " minutos foi:</p>";
            echo "<ul>
            <li>" . number_format($semanas, 2, ",", ".") . " semanas</li>
            <li>" . number_format($dias, 2, ",", ".") . " dias</li>
            <li>" . number_format($horas, 2, ",", ".") . " horas</li>
            <li>" . number_format($minutos, 2, ",", ".") . " minutos</li>
            <li>" . number_format($sobra_segun, 2, ",", ".") . " segundos</li>
            </ul>";
            ?>
        </p>
    </section>
</body>

</html>