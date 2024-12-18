<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[midnightblue] text-[white]">

<?php include_once("./php/navBar.php"); ?>
    <main class="flex justify-center items-center h-[90vh]">
        <form class="w-[600px] border p-[30px] border-solid border-[black] text-[white]" action="./php/connectionFormSubmit.php" method="POST">
        <label class="mt-2.5 mx-auto" for="">
            Email :
            <input class="text-[black] w-full h-[26px] m-auto rounded-[5px]" name="mail" type="email">
        </label>

        <label class="mt-2.5 mx-auto" for="">
            Password :
            <input class="text-[black] w-full h-[26px] m-auto rounded-[5px]" name="pass" type="password">
        </label>
        <button class="incriptionSubmit bg-[blueviolet] block mt-2.5 mb-0 mx-auto p-[5px] rounded-[5px]">Se connecter</button>

        </form>
    </main>
</body>
</html>