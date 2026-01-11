<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicios SuperGlobais</title>
</head>
<body>
    <header>
        <h1>Superglobais</h1>
    </header>
    <main>
        <pre>
            <?php 
            echo "<h2>Superglobal GET</h2>";
            var_dump($_GET);
            echo "<p>Query String - É uma solicitação que vem diretamente pela URL/dados</p>";
            echo "<p>O metodo GET pega diretamente essas query strings que vem pela URL</p>";

            echo "<h2>Superglobal POST</h2>";
            var_dump($_POST);
            echo "<p>Pega dados pelo cabeçalho</p>";

            echo "<h2>Superglobal REQUEST</h2>";
            var_dump($_REQUEST);
            echo "<p>Pega dados vindos por POST e por GET e os unifica</p>";
            ?>

            <?php 

            echo "<h2>Superglobal COOKIE</h2>";
            setcookie("dia-da-semana", "SEGUNDA", time() + 3600 );
            var_dump($_COOKIE);
            echo "<p>Pega dados vindos por POST e por GET e os unifica</p>";

            echo "<h2>Superglobal SESSION</h2>";
            session_start();
            $_SESSION["teste"] = "Funcionou";
            var_dump($_SESSION);
            echo "<p>Pega dados vindos por POST e por GET e os unifica</p>";

            echo "<h2>Superglobal ENV</h2>";
            var_dump($_ENV);
            echo "<p>Pega dados vindos por POST e por GET e os unifica</p>";
            
            echo "<h2>Superglobal SERVER</h2>";
            var_dump($_SERVER);
            echo "<p>Pega dados vindos por POST e por GET e os unifica</p>";

            echo "<h2>Superglobal GLOBALS</h2>";
            var_dump($GLOBALS);
            echo "<p>Pega dados vindos por POST e por GET e os unifica</p>";
            
            ?>
        </pre>
    </main>
    
</body>
</html>