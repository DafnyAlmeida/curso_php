<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de PHP</title>
</head>
<body>
    
    <h1>
        Exemplo de PHP
    </h1>

    <!-- A FORMA ABAIXO NÃO FUNCIONA MAIS -->

    <!-- <script language="php">
        $nome = "Dafny Sabino";
        echo "<p>Meu nome é {$nome}</p>";
    </script> -->

    <!-- USE ESSAS: -->

    <?php echo "CursoemVídeo" ?> <!-- Super tag PHP -->
    <? ?>  <!-- Short open tag -->
    <% %> <!-- ASP tag - Não funciona mais também -->

    <?= "CursoemVídeo" ?> 
    
    <!-- Quando eu tenho um unico comando echo dentro de uma super tag não é necessario colocar ponto e virgula no final, e é aconselhavel que se use a forma curta (short tag PHP) -->

    <?php 

    /* Na short tag (<?= ?>) o comando echo é substituido pelo = 
    */

    // Errado:
    /* <?= echo "CursoEmVideo ?> */

    // Certo:
    /* <?= "CursoEmVideo ?> */
    
    ?>

    <h2>Exemplo dois de PHP</h2>

    <?php 

    /* O comando abaixo não é mais necessario pois esse padrão de horario foi definido no php.ini (configurações) */
        
    // date_default_timezone_set("America/Fortaleza");

        $data = date("d/m/y T");

        echo "Hoje é dia " . date("d/m/y");

        echo "<br>";

        echo "Hoje é dia " . date("D/M/Y"); 

        echo "<br>";

        echo nl2br("Hoje é dia {$data}\n" . "Olá! \n Hoje é dia " . date("d/m/y") . " e a hora atual é " . date("G:i:s"));

        echo "<br>";
    ?>

    <p> 
        Hoje é dia <?= date("d/m/Y") ?>
    </p>

</body>
</html>