<?php 
session_start();

$server = "localhost";
$user = "root";
$password = "azl,kkk!";
$database = "blog";

$connection = mysqli_connect($server, $user, $password, $database);
$sql_user_command = "SELECT comments.id, comment, title FROM comments JOIN articles ON articles.id = comments.idArticle WHERE comments.idUser = {$_SESSION["idUser"]}";
$sql_admin_command = "SELECT * FROM comment";

if($_SESSION["rule"] == 1){
    $action = mysqli_query($connection, $sql_user_command);
}else if($_SESSION["rule"] == 2){
    $action = mysqli_query($connection, $sql_admin_command);
}





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
    

    <?php while($line = mysqli_fetch_assoc($action)): ?>    
    <div id="<?php echo $line["id"]; ?>" class="commentAffichage flex justify-between border items-center border-solid border-[black]">
            <div class="titreArticleCommente"><?php echo $line["title"]; ?></div>
            <textarea hidden name="commentaire" id=""><?php echo $line["comment"]; ?></textarea>
            <div class="supprimerModifierCommentaire">
                <button class="modifierCommentaire bg-[green] m-[5px] p-[5px] rounded-[5px]">Modifier</button>
                <button class="supprimerCommentaire bg-[red] m-[5px] p-[5px] rounded-[5px]">Supprimer</button>
            </div>
    </div>
    <?php endwhile; ?>

    </div>
</main>


<form hidden action="./php/modifierCommentaire.php" method="POST" class="commentaireModifyForm w-[500px] absolute left-[calc(50%_-_250px)] border p-5 border-solid border-[black] top-[100px]">
    <label for="">
        Commentaire:
        <textarea style="color: black;" class="commentaireAAfficher" name="commentaire" id=""></textarea>
    </label>
    <input hidden name="idCommentToModify" class="idCommentaireModifyForm" type="text">
    <div class="commentaireModifyButtons mt-5">
        <button class="bg-[green] m-[5px] p-[5px] rounded-[5px]" type="submit">Enregistrer</button>
        <button class="annulerModifCommentaire bg-[red] m-[5px] p-[5px] rounded-[5px]">Annuler</button>
    </div>
</form>


<form action="./php/supprimerCommentaire.php" method="POST" hidden class="commentDeleteForm w-[500px] text-center absolute left-[calc(50%_-_250px)] border border-solid border-[black] top-[100px]">
    <div>Êtes vous sûr de supprimer ce commentaire ?</div>
    <input hidden name="idCommentaireASupprimee" class="idCommentDelForm" type="text">
    <div class="articleDeleteButtons mt-[60px]">
        <button type="submit" class="bg-[green] m-[5px] p-[5px] rounded-[5px]">Supprimer</button>
        <button class="annulerSupprArticle bg-[red] m-[5px] p-[5px] rounded-[5px]">Annuler</button>
    </div>
</form>

    <script src="./js/commentaires.js"></script>
</body>
</html>