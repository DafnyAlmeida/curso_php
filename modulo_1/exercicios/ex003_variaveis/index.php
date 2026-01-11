<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e constantes</title>
</head>
<body>
    <h1>Variaveis e constantes</h1>
    <h2>Variavel</h2>

    <?php 
        $nome = 'Dafny';
        $sobrenome = 'Sabino';

        const PAIS = "Brasil";
        // 
        // 
        // 
        // 
        $nome = "Edinir";
        // const PAIS = "Europa";

        echo "Muito prazer $nome $sobrenome! Você mora no " . PAIS;
    
    ?>

    <!-- Regras para nomear um identificador:
        - Variavel começa com $
        - A segunda letra pode ser uma letra ou a _ (Não pode número)
        - É case sensitive
        - Não pode palavra reservada
        -->
    
</body>
</html>