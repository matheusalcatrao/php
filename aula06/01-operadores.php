<!DOCTYPE>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <?php
        $preco = $_GET["p"];
        echo "O preço do produto é ".number_format($preco,2) ;
        $preco += ($preco*10/100) ;
        echo "</br>O novo preço de 10% é " .number_format($preco,2);
    ?>
</body>
</html>