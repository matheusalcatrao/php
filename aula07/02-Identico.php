<!DOCTYPE>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<?php
    $a=3;
    $b="3";

    echo "As variaveis A e B sao identicas?";
    $r= ($a==$b)?"SIM":"NAO";   // Sao iguais
    $t= ($a===$b)?"SIM":"NAO";  // Sao iguais e do mesmo tipo
    echo "</br>$r</br>$t";
?>
</body>
</html>