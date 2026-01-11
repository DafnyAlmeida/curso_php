<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número aleatório - Desafio 02</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Gerador de números aleatórios!</h1>
    </header>
    <section>
        <?php
        /* Aqui poderia ser usado tambem a função rand(), entretanto ela caiu em desuso, pois é lenta e antiga */

        /* O mt_rand() tambem poderia ter sido usado, mas mesmo assim ele é menos seguro por poder gerar padroes mais previsiveis */

        /* Entretanto o random_int é a forma mais lenta por ser a mais segura */
        $num = random_int(0, 100);

        echo "<p>Seja bem-vindo(a) ao seu gerador de números aleatorios!</p>";

        echo "<p>O número gerado foi <strong>$num</strong></p>";
        ?>
        <a href="index.php">
            <button>
                Gerar novo número
            </button>
        </a>
    </section>

</body>

</html>