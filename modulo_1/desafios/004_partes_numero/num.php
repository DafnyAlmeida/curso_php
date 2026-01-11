<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partes de um número - Desafio 04</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <section>
        <?php 

        $num = (float) $_GET["numero"] ?? "Número não definido! Tente novamente";

        // $num = str_replace(",", ".", $num);

        $inte = intdiv($num, 1);
        // OU 
        // $inte = (int) $inte;
        // var_dump($inte);

        $fra = $num - $inte;

        $fra = number_format($fra, 2, ",", ".");

        $num = number_format($num, 2, ",", ".");

        echo "<p>A parte inteira de $num é <strong>$inte</strong></p>";

        echo "<p>E sua parte fracionada é <strong>$fra</strong></p>";

        ?>

        <button>
            <a href="index.html">Voltar</a>
        </button>
    </section>
    
</body>
</html>