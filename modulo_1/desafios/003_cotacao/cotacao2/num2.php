<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas - Desafio 03</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <section>
        <?php
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        $num = (float) $_GET["valor"] ?? "Valor não definido! Tente novamente";


        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\''. $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        $cotacao = $dados["value"][0]["cotacaoCompra"];

        $resultado = $num / $cotacao;

        echo "<p>O resultado obtido a partir da conversão de " . numfmt_format_currency($padrao, $num, "BRL") . " foi <strong>" . numfmt_format_currency($padrao, $resultado, "USD") . "*</strong> </p>";

        echo "<p>*Conversão feita a partir dos dados do <a href=\"https://www.bcb.gov.br/estabilidadefinanceira/fechamentodolar\"> Banco Central do Brasil</a> no dia, sendo de " . numfmt_format_currency($padrao, $cotacao, "BRL") . " nesse dia</p>";

        ?>
        <a href="index.html">
            <button>
                Voltar
            </button>
        </a>
    </section>

</body>
</html>

