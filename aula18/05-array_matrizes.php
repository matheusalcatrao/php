<!DOCTYPE>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<pre>
    <?php
        $m = array(array(6,5),
                    array(8,5),
                    array(9,3));
        $m[0][1] = $m[2][1];
        print_r($m);
    ?>
</pre>
</body>
</html>