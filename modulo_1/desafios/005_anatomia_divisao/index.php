<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Anatomia de uma divisão</title>
    <style>

        p {
            font-size: 2em;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 400px;
        }
        
        .colunas {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 100%;
        }

        .filho {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
        }

        .linha {
            border-left: 1px solid black;
        }

        .linha_filho {
            border-top: 1px solid black;
        }
        
    </style>
</head>
<body>
    <?php 
    $divisor = $_GET["divisor"] ?? 1;
    $dividendo = $_GET["dividendo"] ?? 1;
    $int = intdiv($dividendo, $divisor);
    $resto =  $dividendo % $divisor;

    // $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    ?>
    <header>
        <h1>Anatomia de uma divisão</h1>
    </header>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo:</label>
            <input type="number" name="dividendo" id="dividendo" step="any">

            <label for="divisor">Divisor:</label>
            <input type="number" name="divisor" id="divisor" step="any">

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <div class="container">
            <div class="colunas">
                <div class="filho">
                    <?= "<p> $dividendo </p>" ?>
                </div>
                <div class="filho">
                    <?= "<p> $resto </p>" ?>
                </div>
            </div>
            <div class="colunas linha">
                <div class="filho">
                    <?= "<p> $divisor </p>" ?>
                </div>
                <div class="filho linha_filho">
                    <?= "<p> $int </p>" ?>
                </div>
            </div>
        </div>
    </section>

    
</body>
</html>