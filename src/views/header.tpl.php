<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=bree-serif:400" rel="stylesheet" />
    <link rel="stylesheet" href="<?= $baseUrl ?>/assets/css/style.css">
    <title>Pokédex</title>
</head>
<body>
<div class="wrapper">
<header>
    <h2><a href="<?= $router->generate('home') ?>">Pokédex</a></h2>
    <nav>
        <ul class="nav">
            <li><a href="<?= $router->generate('home') ?>">Liste</a></li>
            <li><a href="<?= $router->generate('type') ?>">Types</a></li>
        </ul>
    </nav>
</header>
<main>
