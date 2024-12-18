<?php
session_start();

if(isset($_FILES["articleImage"])){ 
    $fileName = date("YmdHis"); 
    $fileInfo = pathinfo($_FILES["articleImage"]["name"]);
    $fileName .= "." . $fileInfo["extension"];
    move_uploaded_file($_FILES["articleImage"]["tmp_name"], "../images/" . $fileName );
}

echo $fileName;

$server = "localhost";
$user = "root";
$password = "azl,kkk!";
$database = "blog";


$connection = mysqli_connect($server, $user, $password, $database);
$article = mysqli_escape_string($connection, $_POST["articleToAdd"]);
$sql_command = "INSERT INTO articles (title, articles.image, article, idUser) values ('{$_POST["titreToAdd"]}', '{$fileName}', '{$article}', {$_SESSION["idUser"]});";
mysqli_query($connection, $sql_command);
header("Location: ../index.php");


