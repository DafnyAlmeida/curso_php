<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reajuste de preço</title>
</head>
<body>
    <?php
    $preco = $_GET["preco"] ?? 0;
    $aumento = $_GET["aumen"] ?? 0;
    $resul = $preco * (1 + $aumento/100);
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <header>
        <h1>Reajuste de preço</h1>
    </header>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Preço:</label>
            <input type="number" name="preco" id="preco">

            <label for="aumen">
                Reajuste:
                <span id="valorRange"><?= $aumento ?></span>
            </label>
            <input type="range" id="aumen" name="aumen" min="0" max="100" value="<?= $aumento ?? 0 ?>" oninput="valorRange.innerText = this.value + '%'">

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php 
        echo "<p>O preço de " . numfmt_format_currency($padrao, $preco, "BRL") . " com o reajuste de $aumento% fica <strong>" . numfmt_format_currency($padrao, $resul, "BRL") . "</strong></p>";
        ?>
    </section>
</body>
</html>