<!DOCTYPE>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<?php
    function soma($a,$b){
        $s = $a + $b;
        return $s;
    }

    $x = 3;
    $y = 4;
    $r =  soma($x,$y);
    echo "a soma entre $x e $y é $r";
?>
</body>
</html>