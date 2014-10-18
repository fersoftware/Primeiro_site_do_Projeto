<?php
date_default_timezone_set('America/Sao_Paulo');
ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);

$caminho = parse_url("HTTP://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$pagina = substr($caminho['path'],1,strlen($caminho['path'])); // tira a primeira / <-(barra)

function verificaExistencia($pagina)
{
    //Se não for digitada nenhum pagina a home será a padrao
    if(strlen($pagina) == 0 )
    {
        $pagina = 'home';
    }

    //Se não existir mostrara pagina nao encontrada
    if(!file_exists('includes/'.$pagina.'.php'))
    {
        $pagina = 'pagina-nao-encontrada';
    }

    return $pagina;
}
?>

<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Primeiro Site - Projeto Simples em PHP</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container">

    <div class="masthead">
        <h3 class="muted">Projeto Ajustando Rotas</h3>
        <?php require_once('includes/menu.php'); ?>
    </div>

    <?php

    require_once('includes/'.verificaExistencia($pagina).'.php');

    ?>

    <hr>
    <?php require_once('includes/rodape.php'); ?>

</div>
</body>
</html>