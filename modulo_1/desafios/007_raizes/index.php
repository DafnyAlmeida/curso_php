<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Raiz cubica e quadrada</title>
</head>
<body>
    <?php 
    $num = $_GET["num"] ?? 0;
    $raiz_quadra = sqrt($num);
    $raiz_cubica = $num**(1/3);
    
    ?>
    <header>
        <h1>Digite um número!</h1>
    </header>
    <main>
        <form action="<?= $_SERVER["PHP_SELF"] ?>">
            <label for="num">Número:</label>
            <input type="number" name="num" id="num" step="any" value="<?= $num ?>">

            <input type="submit" value="Enviar">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
        echo "<p>A raiz quadrada de $num é " . number_format($raiz_quadra, 2, ",", ".") . " e sua raiz cubica é " . number_format($raiz_cubica, 2, ",", ".") . "</p>";
        ?>
    </section>
    
</body>
</html>