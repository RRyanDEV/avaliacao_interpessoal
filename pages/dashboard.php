<?php
// include("../services/authService.php");
// include_once("../utils/utils.php");
// authHandler("GET");
include("../components/navbarComponent.php");
include("../components/accordionComponent.php");
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <title>AINDA NÃO PENSEI</title>
    
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</head>

<body class="bg-default-80">
    <?php
    $doc = new DOMDocument();
    @$doc->loadHTML('<?xml encoding="utf-8" ?>' . navbarComponent() . accordionComponent("Qualidade de Vida" , "Saúde" , "Diversão", "Espiritualidade"));
    echo $doc->saveHTML();
    ?>
</body>


</html>