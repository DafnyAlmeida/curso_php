<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior e menor numero entre tres</title>
</head>
<body>
    <?php 
    $num1 = $_GET["num1"] ?? "";
    $num2 = $_GET["num2"] ?? "";
    $num3 = $_GET["num3"] ?? "";
    $maior = 0;
    $menor = 0;
    
    


    $numeros = [];
    array_push($numeros, $num1, $num2, $num3);




    var_dump($numeros);
    
    ?>
    <header>
        <h1>Maior e menor numero entre tres</h1>
    </header>
    <main>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="num1">Digite um número:</label>
            <input type="number" name="num1" id="num1">
            
            <label for="num2">Digite um número:</label>
            <input type="number" name="num2" id="num2">

            <label for="num3">Digite um número:</label>
            <input type="number" name="num3" id="num3">

            <input type="submit" value="Enviar">
        </form>
    </main>

    
</body>
</html>