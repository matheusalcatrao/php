<!DOCTYPE>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<?php
    $dia = isset($_GET["ds"])?$_GET["ds"]:0;

    switch ($dia){
        case 2;
        case 3;
        case 4;
        case 5;
        case 6;
            echo "Dia de aula!";
            break;
        case 7;
        case 8;
            echo "Dia descanso";
    }
?>
<a href="exercico02.html">Voltar</a>
</body>
</html>