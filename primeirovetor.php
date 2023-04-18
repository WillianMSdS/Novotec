<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor(randomização)</title>
</head>
<body>
    <?php
    $vertor=array();
    for ($i=0;$i<200;$i++){
        $vetor["$i"]=rand(1, 1000);
    }
    for ($i=0;$i<200;$i++){
       echo $vetor["$i"]. '; ';
    }
    echo '<br /> Maior valor:';
    echo max($vetor) . '<br />'
    ?>
</body>
</html>