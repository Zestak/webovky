<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./query/header-query.css">
    <link rel="stylesheet" href="./css/footer.css">   
    <link rel="stylesheet" href="./css/regform.css">
    <link rel="stylesheet" href="./query/index-query.css">
   
   
   
    <script src="https://kit.fontawesome.com/ec0c674064.js" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
<?php require "assets/header.php"; ?>

<main>
<section class="registration-form">
<h1>Registrace</h1>
    <form action="admin/after-registration.php" method = "POST">
        <input type="text" name="first-name" placeholder = "křestní jméno" class= "email"><br>
        <input type="text" name="second-name" placeholder = "příjmení"class= "email"><br>
        <input type="text" name="email" placeholder = "E-mail"class= "email"><br>
        <input type="password" name="password" placeholder = "Heslo"class= "pw1"><br>
        <input type="password" name="" placeholder = "Heslo znovu"class= "pw2"><br>
        <p class="result-text"></p>
        <input type="submit" type=hidden value= "Zaregistrovat"class = btn>
    </form>




</section>
</main>

<?php require "assets/footer.php"; ?>
<script src="./js/header.js"></script>
<script src="./js/pwcheck.js"></script>
</body>
</html>