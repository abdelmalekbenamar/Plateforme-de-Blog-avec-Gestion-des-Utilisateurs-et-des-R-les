<?php 
session_start();

$server = "localhost";
$user = "root";
$password = "azl,kkk!";
$database = "blog";

$connection = mysqli_connect($server, $user, $password, $database);
$sql_command = "SELECT id, title, image, article, idUser FROM articles;";
$action = mysqli_query($connection, $sql_command);


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
        
        <?php while($line = mysqli_fetch_assoc($action)): ?>
            <div id="<?php echo $line["id"]; ?>" class="articleCard">
                <img class="test" src="./images/<?php echo $line["image"] ?>" alt="">
                <div class="cardInfo">
                    <a href="">
                        <h3 class="articleTitle"><?php echo $line["title"] ?></h3>
                        <p><?php echo $line["article"]; ?></p>
                    </a>
                </div>
            </div>
        <?php endwhile; ?>

   


            
        </div>
    </main>



</body>
</html>