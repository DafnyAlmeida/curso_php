<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Salários</title>
</head>
<body>
    <?php 
    $sala_user = $_GET["sala"] ?? 0;
    $resul = intdiv($sala_user, 1621);
    $sobra = $sala_user - (1621 * $resul);
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <header>
        <h1>Digite seu salário</h1>
    </hearder>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>">
            <label for="sala">Salário</label>
            <input type="number" name="sala" id="sala" step="any">

            <input type="submit" value="Enviar">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
        echo "<p>O seu salário de " . numfmt_format_currency($padrao, $sala_user, "BRL") . " equivale a " . number_format($resul, 2, ",", ".") . " <strong>salários minimos*</strong> e " . numfmt_format_currency($padrao, $sobra, "BRL") . " reais</p>";

        echo "<p>*O salário minimo equivale a R$ 1.621,00</p>";
        
        ?>
    </section>
    
</body>
</html>