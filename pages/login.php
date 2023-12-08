<?php
include("../services/authService.php");
include("../components/loginComponent.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">

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
    <title>Login</title>
</head>

<body class="bg-default-80">
    <?php
    $doc = new DOMDocument();
    $doc->loadHTML('<?xml encoding="utf-8" ?>' . loginComponent());
    echo $doc->saveHTML();
    ?>
</body>

<script>
    // Hide/Show password
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#id_password');
    togglePassword.addEventListener('click', function(e) {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        this.classList.toggle('fa-eye-slash');
    });
</script>

</html>