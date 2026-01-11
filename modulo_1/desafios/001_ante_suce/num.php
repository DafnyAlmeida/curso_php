<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números - Desafio 01</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <section>
        <?php

        $num = $_GET["numero"] ?? "Número não definido! Tente novamente";

        $ante = $num - 1;
        $suce = $num + 1;

        echo "<p>O <em> antecessor</em> de $num é $ante</p>";

        echo "<p>E o <em> sucessor</em> de $num é $suce</p>";

        // OUTRO JEITO - sem variavel

        // echo "O antecessor de $num é" . ($num - 1) . "\n";
        // echo "E o sucessor de $num é" . ($num + 1) . "\n";
        ?>
        <a href="index.html">
            <button>
                Voltar
            </button>
        </a>
    </section>

</body>

</html>