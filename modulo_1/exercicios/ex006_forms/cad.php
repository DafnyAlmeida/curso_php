<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
        /* Esse "??" é chamado de operador de coalescência nula e ele serve para que a variavel receba outra valor como o primeiro não exista, mas mesmo se você não preencher o campo de nome por exemplo ele não retornara o devido texto pois o dado foi sim enviado. Para que apareça tem que tirar da URL */
        $n = $_GET["nome"] ?? "Sem nome";

        $s = $_GET["snome"] ?? "Sem sobrenome";

        // OUTRO EXEMPLO

        // Ele permite que os desenvolvedores forneçam um valor padrão quando a variável não tiver um valor. Verifica se ela está definida ou nula.

        // $n = $_GET["nome"] ?? $_POST["nome"] ?? "sem nome";

        echo "<p>É um prazer te conhecer $n $s</p>";
        ?>
        <button><a href="javascript:history.go(-1)">Voltar para a página anterior</a></button> 
        <!-- Essa forma com JavaScript não é a mais indicada -->
    </main>
    
</body>
</html>