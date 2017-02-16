<!DOCTYPE>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<?php
    $atual = $_GET["aa"];
    echo "O ano atual é $atual";                 //pos-decremento: ++$atual
    echo "</br>E o ano anterior é " .(--$atual); //pre-decremento: --$atual ,++$atual
?>
</body>
</html>