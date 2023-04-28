<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função 3</title>
</head>
<body>
<h1>Função elevar com valor padrão</h1>
    <?php
    function elevarNumero(float $n, float $pot=2){
        echo $n ** $pot."<br />";
    }
    elevarNumero(2,3);
    elevarNumero(3);
    elevarNumero(2);
    elevarNumero(2.1,3.3);
    ?>
</body>
</html>