<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro código PHP!</title>
</head>
<body>
    
    <h1>
        Vamos nos livrar da maldição!
    </h1>

    <p>
        <?php 
            echo "Olá, mundo \u{1F30E}";
        ?>
    </p>

    <?php 
        print "<p>Esse paragrafo foi inserido com PHP</p>";
    ?>

    <?php 
        $nome = "Maria";
        $idade = 16;

        echo "Olá $nome! Você tem $idade anos";

        echo "<br>";

        echo "Olá {$nome}! Você tem {$idade} anos";
    ?>

    <p>
        Seja bem-vinda <?= $nome ?>
    </p>
    
</body>
</html>