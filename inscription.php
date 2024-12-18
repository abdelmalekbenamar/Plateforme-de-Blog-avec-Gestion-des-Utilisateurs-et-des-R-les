<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body class="bg-[midnightblue] text-[white]">

<?php include_once("./php/navBar.php"); ?>

<main class="flex justify-center items-center h-[90vh]">


    <form class="w-[600px] border p-[30px] border-solid border-[black] text-[white]" action="./php/inscriptionFormSubmit.php" method="POST">
        <label class="mt-2.5 mb-0 mx-auto" for="">
            Username :
            <input class="text-[black] w-full h-[26px] m-auto rounded-[5px]" name="userNameInscription" type="text">
        </label>
        <label class="mt-2.5 mb-0 mx-auto" for="">
            Email :
            <input class=" text-[black] w-full h-[26px] m-auto rounded-[5px]" name="emailInscription" type="text">
        </label>
        <label class="mt-2.5 mb-0 mx-auto" for="">
            Password :
            <input class="text-[black] w-full h-[26px] m-auto rounded-[5px]" name="passwordInscription" type="password">
        </label>
        <button class="incriptionSubmit bg-[blueviolet] block mt-2.5 mb-0 mx-auto p-[5px] rounded-[5px]">S'inscrire</button>
    </form>
</main>
    
</body>
</html>