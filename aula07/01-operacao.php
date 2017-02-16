<!DOCTYPE>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];

    $r=($tipo=="s")?$n1+$n2 :$n1*$n2;
    echo "$r";
?>
</body>
</html>