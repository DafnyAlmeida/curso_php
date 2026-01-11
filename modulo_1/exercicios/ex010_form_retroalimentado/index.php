<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario Retroalimentado</title>
</head>

<body>
    <?php 

    $num = (float) $_GET["valor"] ?? 0;
    
    ?>
    <header>
        <h1>Digite o valor que deseja converter!</h1>
    </header>
    <section>
        <p>Digite o valor em reais (R$) que deseja converter para dólar (US$)</p>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get" aria-labelledby="form">
            <label for="valor">Valor</label>
            <input type="number" name="valor" id="valor" step="any" value="<?= $num ?>">

            <input type="submit" value="Converter">
        </form>
    </section>

    <section>
        <h2>Resultado</h2>
    <?php
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\''. $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        $cotacao = $dados["value"][0]["cotacaoCompra"];

        $resultado = $num / $cotacao;

        echo "<p>O resultado obtido a partir da conversão de " . numfmt_format_currency($padrao, $num, "BRL") . " foi <strong>" . numfmt_format_currency($padrao, $resultado, "USD") . "*</strong> </p>";

        echo "<p>*Conversão feita a partir dos dados do <a href=\"https://www.bcb.gov.br/estabilidadefinanceira/fechamentodolar\"> Banco Central do Brasil</a> no dia, sendo de " . numfmt_format_currency($padrao, $cotacao, "BRL") . " nesse dia</p>";

        ?>
    </section>

</body>
</html>