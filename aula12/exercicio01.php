<!DOCTYPE>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<?php
    $v = isset($_GET["val"])?$_GET["val"]:1;
    $c = $v;
    $f = 1;
    do{
       $f = $f*$c;
       $c--;
    }while($c>0);
    echo"<h2>$v != $f</h2>";

?>
</body>
</html>