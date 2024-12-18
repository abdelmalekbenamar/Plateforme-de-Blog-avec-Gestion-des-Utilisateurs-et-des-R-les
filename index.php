<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[midnightblue] text-[white]">


<?php include_once('./php/navBar.php'); ?>


    <main>
        <h1 class="titlePage">Liste des articles:</h1>

        <div id="articleContainer">

            <div id="articleCard">
                <img class="test" src="./images/nature.jpg" alt="">
                <div class="cardInfo">
                    <h3 class="articleTitle">Titre de essai</h3>
                    <p>Lorem ipsum, d Saepe sit exercitationem odio rerum facere dolorum recusandae, provident illo! A, neque at?</p>
                </div>
            </div>

            <div id="articleCard">
                <img class="test" src="./images/nature.jpg" alt="">
                <div class="cardInfo">
                    <h3 class="articleTitle">Titre de essai</h3>
                    <p>Lorem ipsum, d Saepe sit exercitationem odio rerum facere dolorum recusandae, provident illo! A, neque at?</p>
                </div>
            </div>

            <div id="articleCard">
                <img class="test" src="./images/nature.jpg" alt="">
                <div class="cardInfo">
                    <h3 class="articleTitle">Titre de essai</h3>
                    <p>Lorem ipsum, d Saepe sit exercitationem odio rerum facere dolorum recusandae, provident illo! A, neque at?</p>
                </div>
            </div>

            <div id="articleCard">
                <img class="test" src="./images/nature.jpg" alt="">
                <div class="cardInfo">
                    <h3 class="articleTitle">Titre de essai</h3>
                    <p>Lorem ipsum, d Saepe sit exercitationem odio rerum facere dolorum recusandae, provident illo! A, neque at?</p>
                </div>
            </div>

            <div id="articleCard">
                <img class="test" src="./images/nature.jpg" alt="">
                <div class="cardInfo">
                    <h3 class="articleTitle">Titre de essai</h3>
                    <p>Lorem ipsum, d Saepe sit exercitationem odio rerum facere dolorum recusandae, provident illo! A, neque at?</p>
                </div>
            </div>

            <div id="articleCard">
                <img class="test" src="./images/nature.jpg" alt="">
                <div class="cardInfo">
                    <h3 class="articleTitle">Titre de essai</h3>
                    <p>Lorem ipsum, d Saepe sit exercitationem odio rerum facere dolorum recusandae, provident illo! A, neque at?</p>
                </div>
            </div>

        </div>
    </main>



</body>
</html>