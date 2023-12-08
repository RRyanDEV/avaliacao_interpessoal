<?php
include("../services/authService.php");
include_once("../utils/utils.php");
include_once("../components/layouts/defaultLayout.php");
include_once("../components/pdfComponent.php");

authHandler("GET");

$doc = new DOMDocument();

@$doc->loadHTML('<?xml encoding="utf-8" ?>' . '<link rel="icon" href="../assets/img/site-logo.png" />' . '<link rel="stylesheet" href="../assets/scss/main.css">' . createPdfComponent());

echo $doc->saveHTML();
?>
<script>
    const imprimirBtn = document.getElementById('imprimirBtn');
    imprimirBtn.addEventListener('click', function() {
        window.print();
    });
</script>