<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo Média</title>
</head>
<body>

<h1>Cálculo da Média</h1>

<form action="segundo.php"

method="post">

<p>Valor em Real:

<input type="text" name="real" />

</p>

<p>Euro custa:

<input type="text" name="euro" />

</p>

<p>Dolar custa:

<input type="text" name="dolar" />

</p>

<p><input value="Calcular"

type="submit" /></p>

</form>

</body>
</html>

<?php

    if ((isset($_REQUEST["real"])) and (isset($_REQUEST["euro"])) and (isset($_REQUEST["dolar"]))){

        $real = $_REQUEST["real"];
        $euro = $_REQUEST["euro"];
        $dolar = $_REQUEST["dolar"];

      $valoremdolar = number_format (($real / $dolar),2);
      $valoremeuro = number_format (($real / $euro),2);

      echo $real. ' reais em dolar é US$ '. $valoremdolar. ', ' .$real. ' reais em euro é € '. $valoremeuro;
    }

?>