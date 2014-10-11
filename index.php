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
        <? require_once('includes/menu.php'); ?>
    </div>

    <? require_once('includes/home.php'); ?>

    <hr>
    <? require_once('includes/rodape.php'); ?>

</div>
</body>
</html>

