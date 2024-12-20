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



<?php include_once('./php/navBar.php'); ?>

<main>
    <div class="menuGauche">
        <div class="buttonGauche">
            <div class="buttons"><a href="./articles.php">Articles</a></div>
            <div class="buttons"><a href="./commentaires.php">Commentaires</a></div>
            <?php if($_SESSION["rule"] == 2): ?>
            <div class="buttons"><a href="./users.php">Users</a></div>
            <?php endif; ?>
        </div>
    </div>


    <div class="menuDroit">

        <div id="1" class="articleAffichage flex justify-between border items-center border-solid border-[black]">
            <div class="titreArticle">Ceci est un titre de test</div>
            <textarea hidden name="" id=""></textarea>
            <div id="" class="supprimerModifierArticle">
                <button class="modifierArticle bg-[green] m-[5px] p-[5px] rounded-[5px]">Modifier</button>
                <button class="supprimerArticle bg-[red] m-[5px] p-[5px] rounded-[5px]">Supprimer</button>
            </div>
        </div>

        <div id="2" class="articleAffichage flex justify-between border items-center border-solid border-[black]">
            <div class="titreArticle">Ceci est un titre de test</div>
            <textarea hidden name="">dsdsds</textarea>
            <div id="" class="supprimerModifierArticle">
                <button class="modifierArticle bg-[green] m-[5px] p-[5px] rounded-[5px]">Modifier</button>
                <button class="supprimerArticle bg-[red] m-[5px] p-[5px] rounded-[5px]">Supprimer</button>
            </div>
        </div>

        <div id="3" class="articleAffichage flex justify-between border items-center border-solid border-[black]">
            <div class="titreArticle">Ceci est un titre de test</div>
            <textarea hidden name="" id=""></textarea>
            <div id="" class="supprimerModifierArticle">
                <button class="modifierArticle bg-[green] m-[5px] p-[5px] rounded-[5px]">Modifier</button>
                <button class="supprimerArticle bg-[red] m-[5px] p-[5px] rounded-[5px]">Supprimer</button>
            </div>
        </div>

    </div>
</main>
    
<form action="" hidden method="POST" enctype="multipart/form-data" class="articleModifyForm w-[500px] absolute left-[calc(50%_-_250px)] border p-5 border-solid border-[black] top-[100px]">
    <label for="">
        Titre:
        <input style="color: black;" class="leTitreAAfficher" type="text">
    </label>
    <label for="">
        Article:
        <textarea style="color: black;" class="lArticleAAfficher" name="" id=""></textarea>
    </label>
    <label for="">
        Image:
        <input type="file">
    </label>
    <div class="articleModifyButtons mt-5">
        <button class="bg-[green] m-[5px] p-[5px] rounded-[5px]" type="submit">Enregistrer</button>
        <button class="annulerModifArticle bg-[red] m-[5px] p-[5px] rounded-[5px]">Annuler</button>
    </div>
</form>

<form action="" hidden class="articleDeleteForm w-[500px] text-center absolute left-[calc(50%_-_250px)] border border-solid border-[black] top-[100px]">
    <div>Êtes vous sûr de supprimer cet article ?</div>
    <input hidden class="idArticle" type="text">
    <div class="articleDeleteButtons mt-[60px]">
        <button type="submit" class="bg-[green] m-[5px] p-[5px] rounded-[5px]">Supprimer</button>
        <button class="annulerSupprArticle bg-[red] m-[5px] p-[5px] rounded-[5px]">Annuler</button>
    </div>
</form>

<script src="./js/articles.js"></script>
</body>
</html>