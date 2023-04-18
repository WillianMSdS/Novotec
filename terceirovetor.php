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
    if(($i%2 == 0) and ($i%3 == 0)){
     echo $vetor["$i"] . ' ' . 'Numero multiplo <br />';
    }
    else
     echo $vetor["$i"] . ' ' . 'Numero NÃO multiplo <br />';
    }

    ?>
</body>
</html>