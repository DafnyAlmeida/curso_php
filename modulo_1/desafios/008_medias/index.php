<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Médias</title>
</head>
<body>
    <?php 
    $v1 = $_GET["v1"] ?? '';
    $peso1 = $_GET["peso1"] ?? '';
    $v2 = $_GET["v2"] ?? '';
    $peso2 = $_GET["peso2"] ?? '';

    $media_ari = ($v1 + $v2) / 2;
    $media_pon = ($v1 * $peso1 + $v2 * $peso2) / ($peso1 + $peso2);

    ?>
    <header>
        <h1>Calcular média</h1>
    </header>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" step="any" value="<?= $v1 ?>" required>

            <label for="peso1">Peso 1</label>
            <input type="number" name="peso1" id="peso1" step="any" value="1" value="<?= $peso1 ?>" required min="1">

            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" step="any" value="<?= $v2 ?>" required>

            <label for="peso2">Peso 2</label>
            <input type="number" name="peso2" id="peso2" step="any" value="<?= $peso2 ?>" required min="1">

            <input type="submit" value="Calcular">

        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
        echo "<p>A média artimetica obtida foi " . number_format($media_ari, 2, ",", ".") . " e a média ponderada foi " . number_format($media_pon, 2, ",", ".") . "</p>";
        ?>
    </section>

    
</body>
</html>