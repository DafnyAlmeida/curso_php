<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
    <style>
        p, li {
            font-size: 1.15em;
        }

        span {
            font-weight: 700;
        }
    </style>
</head>
<body>
    <h1>As Strings em PHP</h1>
    <p>Existem quatro formatos:</p>
    <ul>
        <li>
            Double quoted |
            <span>Aspas duplas: serve para concatenar texto. Torna qualquer coisa string. Existe interpretação</span>
        </li>
        <li>
            Single quoted |
            <span>Aspas simples: Não tem interpretação do conteúdo</span>
        </li>
        <li>
            Heredoc |
            <span>Tem caracteristicas de aspas duplas mas pode ser escrito em varias linhas tal qual esta lá</span>
        </li>
        <li>
            Nowdoc |
            <span>Tem as caracteristicas das aspas simples (não interpretam) mas tambem podemos escrever como quisermos</span>
        </li>
    </ul> 
    
    <?php 

        //EXEMPLO 1
        // Vai exibir o elefante
        echo "PHP \u{1F418}";

        echo "<br>";

        // Não vai exibir o elefante
        echo 'PHP \u{1F418}';

        echo "<br>";

        // EXEMPLO 2
        // Mesma coisa nesse caso
        echo "Curso " . "PHP";

        echo "<br>";

        echo 'Curso ' . 'PHP';

        echo "<br>";

        // EXEMPLO 3
        // Diferentes
        $curso = "PHP";

        echo 'Curso $curso';

        echo "<br>";

        echo "Curso $curso";

        echo "<br>";

        // EXEMPLO 4

        $nome = 'Gustavo';
        $sobrenome = 'Guanabara /u{1F596}';
        echo "$nome $sobrenome";

        echo "<br>";

        // EXEMPLO 5

        /* Não é possivel fazer a interpolação de constantes nem com aspas simples nem com duplas. Para exibi-las temos que concatenas para resultado de funções funciona da mesma forma*/

        const ESTADO = "Ceará";
        
        echo "Moro no ESTADO";

        echo "<br>";

        echo "Moro no " . ESTADO;

        echo "<br>";

        echo "Já estamos no ano de " . date("Y");

        echo "<br>";

        // EXEMPLO 5
        $nom = "Rodrigo";
        $snom = "Nogueira";

        echo "$nom Minotauro $snom";

        echo "<br>";

        echo "$nom 'Minotauro' $snom";

        echo "<br>";

       // echo "$nom "Minotauro" $snom";

       echo '$nom "Minotauro" $snom';

       echo "<br>";

       // Isso se chama sequencia de escape para poder exibir algo entre aspas

       echo "$nom \"Minotauro\" $snom";

       echo "<br>";

       echo "$nom \\Minotauro\\ $snom";

       echo "<br>";

       echo "$nom \"Minotauro\" $snom";

       echo "<br>";

       // Exemplo especial 
       echo "<pre>";

       echo "$nom \n\t \"Minotauro\" \n\t  $snom";

       echo "<pre>";

       // Exemplo especial 

       echo "<br>";

       echo nl2br("$nom \n\t \"Minotauro\" \t\t $snom");

       // Exemplo especial

       echo "<br>";

       echo "$nom <br>&nbsp;&nbsp; \"Minotauro\" &nbsp;&nbsp; $snom";
    ?>

    <?php 
        // SINTAXE HEREDOC
        $curso = "PHP";
        $ano = date("Y");

        echo <<< FRASE
            Estou estudando
            $curso no ano de $ano
        FRASE;

        // SINTAXE NOWDOC

        echo <<< 'FRASE'
            Estou estudando
            $curso no ano de $ano
        FRASE;
    
    ?>
</body>
</html>