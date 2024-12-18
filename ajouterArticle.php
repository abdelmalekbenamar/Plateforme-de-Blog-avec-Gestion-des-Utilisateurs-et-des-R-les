<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[midnightblue] text-[white]">
    
<?php include_once("./php/navBar.php"); ?>

<form class="formAjouterArticle" action="./php/ajouterArticleFormSubmit.php" method="POST" enctype="multipart/form-data">
    <label for="">
        Titre :
    </label>
    <input name="titreToAdd" type="text">
    <label for="">
        Article :
    </label>
    <textarea rows="13" cols="30" name="articleToAdd" id=""></textarea>
    <label for="">
        Image :
    </label>
    <input name="articleImage" type="file">

    <button class="submitAddArticleButton bg-[blueviolet] block mt-2.5 mb-0 mx-auto p-[5px] rounded-[5px]" type="submit">Submit</button>
</form>

</body>
</html>