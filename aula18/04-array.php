<!DOCTYPE>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<div>
    <pre>
    <?php
        $v = array("nome" => "Ama", "idade" =>23, "peso" => 65.5);
        foreach ($v as $k => $c) {
            echo "O campo $k possui o conteudo $c </br>";
        }

    ?>
    </pre>
</div>
</body>
</html>