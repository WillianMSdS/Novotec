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

<form action="primeiro.php"

method="post">

<p>Digite o nome do produto:

<input type="text" name="nome" />

</p>

<p>Digite a quantidade:

<input type="text" name="quant" />

</p>

<p>Digite o preço unitario:

<input type="text" name="prec" />

</p>

<p>Digite o frete:

<input type="text" name="fret" />

</p>

<p>Digite o desconto:

<input type="text" name="desc" />

</p>

<p><input value="Calcular"

type="submit" /></p>

</form>

</body>
</html>

<?php

    if ((isset($_REQUEST["nome"])) and (isset($_REQUEST["quant"])) and (isset($_REQUEST["prec"])) and (isset($_REQUEST["fret"])) and (isset($_REQUEST["desc"]))){

        $nome = $_REQUEST["nome"];
        $quant = $_REQUEST["quant"];
        $prec = $_REQUEST["prec"];
        $fret = $_REQUEST["fret"];
        $desc = $_REQUEST["desc"];

        $preçofinal = number_format(($quant * $prec) + $fret - $desc,2);
        $preçoformatado = str_replace(".",",",$preçofinal);
        echo $nome. " o preço total é R$ " . $preçofinal;
    }

?>