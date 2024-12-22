<?php

$server = "localhost";
$user = "root";
$password = "azl,kkk!";
$database = "blog";

$connection = mysqli_connect($server, $user, $password, $database);

$id = $_POST["idUtilisateurASupprimee"];

$sql_command = "DELETE FROM users WHERE id = {$id};";

mysqli_query($connection, $sql_command);
header("Location: ../users.php");

