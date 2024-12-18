<?php

$server = "localhost";
$user = "root";
$password = "azl,kkk!";
$database = "blog";

$connection = mysqli_connect($server, $user, $password, $database);
$sql_command = "insert into users (username, mail, pass, idRule) values ('{$_POST["userNameInscription"]}', '{$_POST["emailInscription"]}', HEX(AES_ENCRYPT('{$_POST["passwordInscription"]}', 'azerty')), 1);";

mysqli_query($connection, $sql_command);
header("Location: ../connection.php");

// select mail, CAST(AES_DECRYPT(UNHEX(pass), 'azerty') AS CHAR) AS pass, idRule from users;