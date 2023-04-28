<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função 2</title>
</head>
<body>
    <?php
    function mostrarNome($nome){
        echo "<h1>Olá ".$nome."!</h1>";
    }
    $fulano = "Willian";
    mostrarNome($fulano);
    ?>
</body>
</html>