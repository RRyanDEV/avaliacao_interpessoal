<?php
// include("../services/authService.php");
// include_once("../utils/utils.php");
// authHandler("GET");

?>

<!DOCTYPE html>
<html>

<head>
    <!-- Property -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:type" content="website" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ryan Gomes" />
    <meta name="keywords" content="PHP, MySQL, HTML, TAILWIND" />
    <!-- Link's -->
    <link rel="stylesheet" href="../dist/style.css">
    <link rel="icon" href="../assets/img/site-logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <title>AINDA NÃO PENSEI</title>
</head>

<body class="bg-default-80">
    <nav class="bg-white border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="/assets/img/user-icon.png" class="h-8" alt="" />
                <h3 class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Olá</h3>
            </div>
            <div class="w-full md:block md:w-auto">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="./exportPdf.php" class="block py-2 px-3 black hover:text-blue-700 rounded md:bg-transparent md:p-0">Gerar PDF</a>
                    </li>
                    <li>
                        <a href="../api/auth.php?logout=true" class="block py-2 px-3 black hover:text-red-500 rounded md:bg-transparent md:p-0">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    

</body>


</html>