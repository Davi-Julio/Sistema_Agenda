<?php

include_once "helper/url.php";
include_once "Config/config.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="short icon" href="<?=$BASE_URL?>/Imgs/agenda.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $BASE_URL?>/Css/style.css">
    <link rel="stylesheet" href="<?= $BASE_URL?>/Css/mediaQuery.css">
</head>
<body>

<header class="header">
    <figure class="img-header">
        <img src="<?=$BASE_URL?>/Imgs/agenda.png" alt="">
    </figure><!--img-header-->
    <nav class="nav">
        <ol>
            <li><a href="<?=$BASE_URL?>/index.php">Home</a></li>
            <li><a href="<?=$BASE_URL?>/cadastrarContato.php">Cadastrar Contato</a></li>
        </ol>
    </nav><!--nav-->
</header><!--header-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    
</body>
</html>