<?php
session_start();

$server = "localhost";
$user = "root";
$password = "azl,kkk!";
$database = "blog";

$connection = mysqli_connect($server, $user, $password, $database);
$monCommentaire = mysqli_escape_string($connection, $_POST["commentaire"]);
$idUser = $_SESSION["idUser"];
$idArticle = $_POST["idArticle"];
$sql_command = "INSERT INTO comments (comment, idUser, idArticle) values ('{$monCommentaire}', {$idUser}, {$idArticle});";
mysqli_query($connection, $sql_command);

header("Location: ../lireArticle.php?idArticle={$idArticle}");