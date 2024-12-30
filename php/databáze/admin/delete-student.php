<?php 
require "../classes/Auth.php";
require "../classes/Database.php";
require "../classes/Url.php";
require "../classes/Student.php";
session_start ();

if (!Auth::isloggedin() ){
    die ("nepovolený přístup");
}

$role = $_SESSION["role"];

$database = new Database(); 
$connection =$database ->connectionDB();



if ($_SERVER["REQUEST_METHOD"]==="POST"){ 
if(Student::deleteStudent($connection, $_GET["id"])){ 
    Url::redirectUrl( "/php/databáze/admin/students.php");
};
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/header.css">
<link rel="stylesheet" href="../query/header-query.css">
<link rel="stylesheet" href="../css/footer.css">   
    <script src="https://kit.fontawesome.com/ec0c674064.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="../css/admin-delete-student.css">
   
    <title>smazat žáka</title>
</head>
<body>
<?php require "../assets/admin-header.php"; ?>
<main>
     

    <?php if ($role ==="admin"): ?>
    <section class="delete-form">
<form method = "POST" >
    <p>Jste si jisti, že chcete žáka smazat?</p>
    <div class="btns">

    <a href="one-student.php?id=<?= $_GET['id']?>">zrušit</a>

    <button>smazat</button>
</div>
   
    
</form>
</section>
    <?php else: ?>
        <section class = "error-box">
            <h1>
            obsah stránky je k&nbsp;dispozici pouze administrátorům
        </h1>
    </section>
<?php endif; ?>

</main>
<script src="../js/header.js"></script>
<?php require "../assets/footer.php"; ?>

</body>
</html> 