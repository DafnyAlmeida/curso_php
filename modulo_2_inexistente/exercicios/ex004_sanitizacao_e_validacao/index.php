<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
    <?php 

    // filter_input(metodo, dado do form, filtro: o que deve fazer com o dado)
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);
    }
    ?>
    <h1>Sanitização e validção de dados</h1>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade">

        <input type="submit" value="Eniviar">
    </form>
    <p>
        <?php 
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $options = [
            "options" => [
                "min_range" => 0,
                "max_range" => 119
            ]
        ];

        $idadevalida = filter_var($idade, FILTER_VALIDATE_INT);

            if ($idadevalida !== false) {
                echo "Sua idade é ". htmlspecialchars($idade);
            } else {
                echo "Idade invalida";
            };
        }
        ?>

    </p>
    
    <!-- O filter_var pega uma variavel ja sanitalizada e checa se ela é o esperado com base em criterios como faixas e retorna false ou true -->

    <!-- htmlspecialchars() checa se há algum codigo malicioso -->

    <!-- trim() remove espaços -->

    <!-- empty() retorna true se o campo estiver vazio (false, null, 0, "0", "", []) -->
    
</body>
</html>