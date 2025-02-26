<?php
$alphabet = gen_alphabet();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/simple.css" />
    <link rel="stylesheet" type="text/css" href="./styles/custom.css" />
    <title>Name Explorer</title>
</head>
<body>
    <header>
        <h1>
            <a href="index.php">Name Explorer</a> 
        </h1>
        <p>Найди любое имя!</p>
        <nav>
            <?php foreach($alphabet AS $character):?>
            <a href="char.php?<?php echo http_build_query(['char' => $character]);?>">
            <?php echo e($character);?>
            </a>
            <?php endforeach;?>
        </nav>
    </header>
    <main>