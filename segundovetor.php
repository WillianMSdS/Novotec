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
    for ($i=0;$i<50;$i++){
        $vetor["$i"]=rand(1, 500);
    }
    for ($i=0;$i<50;$i++){
       echo $vetor["$i"]. '; ';
    }

    echo '<br /> Média valor: ' . $media = array_sum($vetor) / count($vetor);
    ?>
</body>
</html>