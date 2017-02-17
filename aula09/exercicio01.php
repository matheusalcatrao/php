<!DOCTYPE>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<?php
    $a = isset($_GET["ano"])?$_GET["ano"]:1900;
    $idade = date("Y") - $a;
    echo "Voce nasceu em $a e tem $idade anos!";
        if($idade>=16 && $idade<=17){
            $val = "Voto opcional";
        }elseif($idade>=18 && $idade<=65){
            $val = "voto obrigatorio";
        }else{
            $val = "opcional";
        }

    echo "</br>Para essa idade,$val";
?>
</body>
</html>