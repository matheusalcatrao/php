<!DOCTYPE>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <?php
        function teste(&$x){
            $x += 2;
            echo "o valor de x e $x<br/>";
        }

        $a = 3;
        teste ($a);
        echo "O valor de A e $a "
    ?>
</body>
</html>