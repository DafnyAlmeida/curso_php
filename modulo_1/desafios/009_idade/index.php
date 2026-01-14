<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Idade</title>
</head>
<body>
    <?php 
    $nasci = $_GET["nasci"] ?? 0;
    $ano = $_GET["ano"] ?? date("Y");
    $resul = $ano - $nasci;
    ?>

    <header>
        <h1>Calcule sua idade!</h1>
    </header>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nasci">Ano de nascimento:</label>
            <input type="number" name="nasci" id="nasci" value="<?= $nasci ?>" max="<?= date('Y') ?>">

            <label for="ano">Ano em que quer saber sua idade:</label>
            <input type="number" name="ano" id="ano" value="<?= $ano ?>">

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
        echo "<p>A sua idade em $ano será de $resul anos</p>"
        ?>
    </section>

    
</body>
</html>