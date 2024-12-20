<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/stylesParametres.css">
    <title>Paramètres</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[midnightblue] text-[white]">
    <?php include_once("./php/navBar.php"); ?>

<main>
    <div class="menuGauche">
        <div class="buttonGauche">
            <div class="buttons"><a href="./articles.php">Articles</a></div>
            <div class="buttons"><a href="./commentaires.php">Commentaires</a></div>
            <div class="buttons"><a href="./users.php">Users</a></div>
        </div>
    </div>


    <div class="menuDroit">

    </div>
</main>
</body>
</html>