<?php 
session_start();
$server = "localhost";
$user = 'root';
$password = "azl,kkk!";
$database = "blog";

$connection = mysqli_connect($server, $user, $password, $database);
$user_command = "SELECT * FROM articles WHERE idUser = {$_SESSION["idUser"]};";
$admin_command = "SELECT * FROM articles;";

if($_SESSION["rule"] == 1){
    $result = mysqli_query($connection, $user_command);
}else if($_SESSION == 2){
    $result = mysqli_query($connection, $admin_command);
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

<?php while($line = mysqli_fetch_assoc($result)): ?>
        <div id="<?php echo $line["id"]; ?>" class="articleAffichage flex justify-between border items-center border-solid border-[black]">
            <div class="titreArticle"><?php echo $line["title"]; ?></div>
            <textarea hidden name="" id=""><?php echo $line["article"]; ?></textarea>
            <div class="supprimerModifierArticle">
                <button class="modifierArticle bg-[green] m-[5px] p-[5px] rounded-[5px]">Modifier</button>
                <button class="supprimerArticle bg-[red] m-[5px] p-[5px] rounded-[5px]">Supprimer</button>
            </div>
        </div>
<?php endwhile; ?>


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
    <input hidden name="idArticleToModify" class="idArticleModifyForm" type="text">
    <div class="articleModifyButtons mt-5">
        <button class="bg-[green] m-[5px] p-[5px] rounded-[5px]" type="submit">Enregistrer</button>
        <button class="annulerModifArticle bg-[red] m-[5px] p-[5px] rounded-[5px]">Annuler</button>
    </div>
</form>

<form action="" hidden class="articleDeleteForm w-[500px] text-center absolute left-[calc(50%_-_250px)] border border-solid border-[black] top-[100px]">
    <div>Êtes vous sûr de supprimer cet article ?</div>
    <input hidden name="idArticleASupprimee" class="idArticleDelForm" type="text">
    <div class="articleDeleteButtons mt-[60px]">
        <button type="submit" class="bg-[green] m-[5px] p-[5px] rounded-[5px]">Supprimer</button>
        <button class="annulerSupprArticle bg-[red] m-[5px] p-[5px] rounded-[5px]">Annuler</button>
    </div>
</form>

<script src="./js/articles.js"></script>
</body>
</html>