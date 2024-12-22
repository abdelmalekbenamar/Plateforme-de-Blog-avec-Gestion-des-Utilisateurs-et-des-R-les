<?php

$server = "localhost";
$user = "root";
$password = "azl,kkk!";
$database = "blog";

$connection = mysqli_connect($server, $user, $password, $database);

$commentaire = mysqli_escape_string($connection, $_POST["commentaire"]);
$id = $_POST["idCommentToModify"];

$sql_command = "UPDATE comments SET comment = '{$commentaire}' WHERE id = {$id};";
mysqli_query($connection, $sql_command);

header("Location: ../commentaires.php");