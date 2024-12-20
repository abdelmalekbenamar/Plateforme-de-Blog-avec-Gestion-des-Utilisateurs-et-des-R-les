<?php
$id = $_POST["idArticleASupprimee"];

$server = "localhost";
$user = "root";
$password = "azl,kkk!";
$database = "blog";

$connection = mysqli_connect($server, $user, $password, $database);
$sql_command = "DELETE FROM articles WHERE id = {$id};";
mysqli_query($connection, $sql_command);

header("Location: ../articles.php");