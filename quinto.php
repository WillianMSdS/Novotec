<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <?php
    function olaMundo2(){
        echo "olaMundo3!";
        olaMundo2();
    }
    function olaMundo3(){
        echo "olaMundo3";
    }
        olaMundo2();
    ?>
</body>
</html>