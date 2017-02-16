<!DOCTYPE>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<?php
    $ano= $_GET["an"];
    $idade = 2017 - $ano;
    $result = ($idade>=18 && $idade<=64)?"É OBRIGATORIO":"NAO É OBRIGATORIO";
    echo "quem nasceu em $ano tem idade de $idade, $result";



?>
</body>
</html>