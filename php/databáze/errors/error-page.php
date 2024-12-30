<?php
 
$error_text = $_GET["error_text"];



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/footer.css">   

    <script src="https://kit.fontawesome.com/ec0c674064.js" crossorigin="anonymous"></script>
   
    <title>Document</title>
</head>
<body>
<section class="link">
<a href="../admin/students.php">Zpět na úvodní stranu</a>
</section>


<main>
    <section class="error">
        <p><?=$error_text?></p>
    </section>
</main>

<body>

<script src="../js/header.js"></script>
</body>
</html>