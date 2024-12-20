<?php

if(isset($_FILES["lImage"])){
    $fileName = date("YmdHis");
    $fileInfo = pathinfo($_FILES["lImage"]["name"]);
    $fileName .= "." . $fileInfo["extension"];
    move_uploaded_file($_FILES["lImage"]["tmp_name"], "../images/" . $fileName);
}
 $server = "localhost";
 $user = 'root';
 $password = "azl,kkk!";
$database = "blog";

$connection = mysqli_connect($server, $user, $password, $database);
$titre = mysqli_escape_string($connection, $_POST["titre"]);
$article = mysqli_escape_string($connection, $_POST["article"]);
$sql_command_modify = "UPDATE articles SET title = '{$titre}', image = '{$fileName}', article = '{$article}' WHERE id = {$_POST["idArticleToModify"]};";
$sql_command_delete_image = "SELECT image FROM articles WHERE id = {$_POST["idArticleToModify"]};";

$result = mysqli_query($connection, $sql_command_delete_image);
$arrayImage = mysqli_fetch_assoc($result);
$imageASupprimee = $arrayImage["image"];
unlink("../images/{$imageASupprimee}");
mysqli_query($connection, $sql_command_modify);
header("Location: ../articles.php");

