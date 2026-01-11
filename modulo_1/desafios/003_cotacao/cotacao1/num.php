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

        // Formatação de moedas com internacionalização
        //Biblioteca intl

        $num = (float) $_GET["valor"] ?? "Valor não definido! Tente novamente";

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        // $padrao_us = numfmt_create("en_US", NumberFormatter::CURRENCY);

        $data = new DateTime($_GET["data"]);

        $data_formatada = $data->format("m/d/Y");

        $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/"
            . "CotacaoDolarDia(dataCotacao=@dataCotacao)"
            . "?@dataCotacao='$data_formatada'"
            . "&\$top=1"
            . "&\$skip=0"
            . "&\$format=json"
            . "&\$select=cotacaoVenda";


        // Faz a requisição para a API
        $resposta = file_get_contents($url);

        // Converte JSON em array PHP
        $dados = json_decode($resposta, true);

        // Pega o valor do dólar
        $num_us = $dados["value"][0]['cotacaoVenda'];

        $mult = $num / $num_us;

        echo "<p>O resultado obtido a partir da conversão de " . numfmt_format_currency($padrao, $num, "BRL") . " foi <strong>" . numfmt_format_currency($padrao, $mult, "USD") . "*</strong> </p>";

        echo "<p>*Conversão feita a partir dos dados do <a href=\"https://www.bcb.gov.br/estabilidadefinanceira/fechamentodolar\"> Banco Central do Brasil</a> no dia, sendo de " . numfmt_format_currency($padrao, $num_us, "BRL") . " nesse dia</p>";

        ?>
        <a href="index.html">
            <button>
                Voltar
            </button>
        </a>
    </section>

</body>
</html>