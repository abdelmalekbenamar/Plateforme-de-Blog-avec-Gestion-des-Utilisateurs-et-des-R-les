<?php

$server = "localhost";
$user = "root";
$password = "azl,kkk!";
$database = "blog";

$id = $_POST["idCommentaireASupprimee"];

$connection = mysqli_connect($server, $user, $password, $database);
$sql_command = "DELETE FROM comments WHERE id = {$id}";

mysqli_query($connection, $sql_command);
header("Location: ../commentaires.php");