<?php
session_start();

$server = "localhost";
$user = "root";
$password = "azl,kkk!";
$database = "blog";

$connection = mysqli_connect($server, $user, $password, $database);
$sql_command = "select id, mail, username, CAST(AES_DECRYPT(UNHEX(pass), 'azerty') AS CHAR) AS pass, idRule from users;";
$result = mysqli_query($connection, $sql_command);
while($line = mysqli_fetch_assoc($result)){
    if($line["mail"] == $_POST["mail"] && $line["pass"] == $_POST["pass"]){
        $_SESSION["username"] = $line["username"];
        $_SESSION["rule"] = $line["idRule"];
        $_SESSION["idUser"] = $line["id"];
        header("Location: ../index.php");

    }
}