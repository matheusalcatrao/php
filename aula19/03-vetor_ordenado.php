<!DOCTYPE>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<pre>
    <?php
        $v = array(2 =>"B",5=>"A",0=>"E",9=>"H",7=>"W");
        print_r($v);
        krsort($v);          //sort e rsort, asort e arsort, ksort
        print_r($v);

    ?>
</pre>
</body>
</html>