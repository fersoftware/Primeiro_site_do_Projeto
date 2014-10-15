<?php
date_default_timezone_set('America/Sao_Paulo');
ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);

// Se a variavel existir ou não estiver em branco mostra a página escolhida, caso contrario
// mostra a pagina home por padrao
if(!isset($_GET['p']) || strlen($_GET['p']) == 0 )
{
    $pagina = 'home';
}
else
{
    $pagina = $_GET['p'];
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
        <h3 class="muted">Projeto Simples</h3>
        <?php require_once('includes/menu.php'); ?>
    </div>

    <?php
    //Se a pagina nao existir, exibe que a pagina nao foi encontrada
    if(!file_exists('includes/'.$pagina.'.php'))
    {
        $pagina = 'pagina-nao-encontrada';
    }

    require_once('includes/'.$pagina.'.php');

    ?>

    <hr>
    <?php require_once('includes/rodape.php'); ?>

</div>
</body>
</html>