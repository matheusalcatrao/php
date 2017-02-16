<!DOCTYPE>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<?php
    $n1=$_GET["a"];
    $n2= $_GET["b"];
    $m = ($n1+$n2)/2;
    echo "A media é $m";


    echo "</br>A situação é " .(($m>6)?"APROVADO":"REPROVADO");

?>
</body>
</html>