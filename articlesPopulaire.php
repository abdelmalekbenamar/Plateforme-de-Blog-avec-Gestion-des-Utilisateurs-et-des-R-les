<?php 
    session_start();
    // echo $_GET["idArticle"];
    $server = "localhost";
    $user = "root";
    $password = "azl,kkk!";
    $database = "blog";

    $connection = mysqli_connect($server, $user, $password, $database);
    $sql_command = "SELECT title, image, article, idUser FROM articles WHERE id = {$_GET["idArticle"]};";
    $result = mysqli_query($connection, $sql_command);

    $sql_command_comments = "SELECT id, comment FROM comments WHERE idArticle = {$_GET["idArticle"]};";
    $result_comments = mysqli_query($connection, $sql_command_comments);

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
<body>
    <?php include_once("./php/navBar.php"); ?>

    <main class="main w-4/5 mt-5 mb-0 mx-auto">

    <?php while($line = mysqli_fetch_assoc($result)): ?>
        <img class="imageArticle block m-auto" src="./images/<?php echo $line["image"]; ?>" alt="">
        <h1 class="titreArticle text-3xl font-[bold] mt-3 mb-3"><?php echo $line["title"]; ?></h1>
        <p class="articleArticle"><?php echo $line["article"]; ?></p>

    <?php endwhile; ?>

    <?php if(isset($_SESSION["username"])): ?>
        <form action="./php/ajouterCommentaireSubmit.php" method="POST">
        <label for="like">
            <input hidden name="like" value="like" class="likeCheckbox" type="checkbox">
            <img src="./images/unliked.png" class="likedButton w-10 block cursor-pointer mx-auto my-2.5" alt="">
        </label>
            <input hidden name="idArticle" value="<?php echo $_GET["idArticle"]; ?>" type="text">
            <textarea placeholder="Votre commentaire ici!" name="commentaire" class="articleTxtArea border border-solid border-[red]"></textarea>
            <button type="submit" class="bg-[blueviolet] mt-2.5 p-[5px] rounded-[5px]">Enregistrer</button>
        </form>
    <?php endif; ?>

        <div class="commentaires m-2.5">

        <?php while($line_comments = mysqli_fetch_assoc($result_comments)): ?>
            <div class="cardComment mb-5 bg-[rgb(230,217,217)] p-[5px] rounded-[5px]">
                <h2 class="commentTitle"><?php echo $line_comments["id"] . $_SESSION["username"]; ?></h2>
                <p class="commentContent"><?php echo $line_comments["comment"]; ?></p>
            </div>
        <?php endwhile; ?>
        </div>

    </main>


    <script src="./js/lireArticleLikeButton.js"></script>
</body>
</html>