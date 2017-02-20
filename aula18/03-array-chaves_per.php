<!DOCTYPE>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <pre>
    <?php
        $v = array(0=>5, 1=>6, 4=>10, 7=>8);
        $v[] = 10;
        unset($v[4]);       //para retirar uma posiçao do vetor
        print_r($v);
    ?>
    </pre>
</body>
</html>