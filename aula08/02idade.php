<!DOCTYPE>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<?php
    $nome = isset($_GET["nome"])?$_GET["nome"]:"Nao identificado";
    $ano = isset($_GET["ano"])?$_GET["ano"]:"0";
    $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"Nao identificado";
    $idade = date("Y") - $ano;
    echo "$nome é $sexo tem $idade anos";


?>
</body>
    <a href="02exercicio.html">Voltar</a>
</html>