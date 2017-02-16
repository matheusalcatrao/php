<!DOCTYPE>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Funcoes arit</title>
</head>
<body>
    <?php
        $n1 = $_GET["x"];
        $n2 = $_GET["y"];

        echo "Os valores recebidos sao: $n1 e $n2";
        echo "</br>o valor absoluto de $n2 é " .abs($n2);
        echo "</br>O valor de $n1<sup>$n2</sup> e " .pow($n1, $n2);
        echo "</br>A raiz de $n1 e ".sqrt($n1);
        echo "</br>O valor de $n2 arredondado e " .round($n2);
        echo"</br>O valor de inteiro de $n2 e " .intval($n2);
        echo "</br>o valor de $n2 em moedas e " .number_format($n2,2,".",",");
        
    ?>
</body>
</html>