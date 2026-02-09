<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Menu</title>
</head>
<body>
    <?php 
    $op = $_GET["op"] ?? 0;
    ?>
    <header>
        <h1>Bem-vindo ao seu menu</h1>
    </header>
    <main>
        <p>Escolha uma das opções abaixo:</p>
        <ul>
            <li>1 - Mostrar data atual</li>
            <li>2 - Gerar número aleatório</li>
            <li>3 - Gerar cor</li>
            <li>4 - Sair</li>
        </ul>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="op">Digite a operação que deseja fazer:</label>
            <input type="number" name="op" id="op" min="1" max="4">

            <input type="submit" value="Enivar">
        </form>
    </main>

    <main>
        <h2>Resultado</h2>

        <?php 
        switch ($op) {
            case 1:
                echo "<p> A data atual é " . date("d/m/y") . "</p>";
                break;
            case 2:
                echo "<p> O número aleatorio gerado foi " . random_int(0, 1000000) . "</p>";
                break;
            case 3:
                $num = (string) mt_rand(100000, 999999);
                $cor = (string) "#" . $num;
                echo "<p> A cor aleatoria gerada foi: " . $cor . "</p>";
                echo "<div style='width: 300px; height: 300px; margin: auto; background-color: $cor'></div>";
                break;
            case 4:
                echo "Obrigada por usar!";
                break;
        }
        
        ?>
        
    </main>

    
</body>
</html>