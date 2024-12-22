<?php
session_start();
$server = "localhost";
$user = "root";
$password = "azl,kkk!";
$database = "blog";

$connection = mysqli_connect($server, $user, $password, $database);
$sql_command = "SELECT id, username, mail FROM users WHERE idRule = 1";

$result = mysqli_query($connection, $sql_command);




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

    <?php while($line = mysqli_fetch_assoc($result)): ?>    
    <div id="<?php echo $line["id"]; ?>" class="userAffichage flex justify-between border items-center border-solid border-[black]">
            <div class="username"><?php echo $line["username"]; ?></div>
            <div name="commentaire" id=""><?php echo $line["mail"]; ?></div>
            <div class="supprimerModifierCommentaire">
                <button class="supprimeruser bg-[red] m-[5px] p-[5px] rounded-[5px]">Supprimer</button>
            </div>
    </div>
    <?php endwhile; ?>

    </div>
</main>



<form action="./php/supprimerUtilisateur.php" method="POST" hidden class="userDeleteForm w-[500px] text-center absolute left-[calc(50%_-_250px)] border border-solid border-[black] top-[100px]">
    <div>Êtes vous sûr de supprimer cet utilisateur ?</div>
    <input hidden name="idUtilisateurASupprimee" class="idUserDelForm" type="text">
    <div class="userDeleteButtons mt-[60px]">
        <button type="submit" class="bg-[green] m-[5px] p-[5px] rounded-[5px]">Supprimer</button>
        <button class="annulerSupprUtilisateur bg-[red] m-[5px] p-[5px] rounded-[5px]">Annuler</button>
    </div>
</form>


<script src="./js/users.js"></script>
</body>
</html>