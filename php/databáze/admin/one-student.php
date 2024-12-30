<?php
require "../classes/Auth.php";
require "../classes/Database.php";
// require "../classes/Url.php";
require "../classes/Student.php";
session_start ();

if (!Auth::isloggedin() ){
    die ("nepovolený přístup");
}
 
 $role = $_SESSION["role"];

    $database = new Database(); 
    $connection =$database ->connectionDB();

    if (isset($_GET["id"]) and is_numeric($_GET["id"]) ) {
    $students = Student::getStudent($connection, $_GET["id"]);
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
   
    <link rel="stylesheet" href="../css/admin-one-student.css">
    <title>Document</title>
</head>
<body>
<section> <?php require "../assets/admin-header.php";?> </section>

    <main>

<section class = "one-student">
<?php if ($students === null): ?>
    <p><h2>žák nenalezen</h2></p>
    <?php else: ?>
        <div class="one-student-box">

            <h2><?= htmlspecialchars($students["first_name"])." " .htmlspecialchars( $students["second_name"])?></h2>
            <p> věk: <?= htmlspecialchars($students ["age"])?></p>
            <p>Dodatečné informace: <?=htmlspecialchars($students ["life"])?></p>
            <p>Kolej: <?= htmlspecialchars($students["college"])?></p>
        </div>
        
        <?php if($role === "admin"): ?>
                <div class="one-student-buttons">
        <a class= "edit-one-student" href="edit-student.php?id=<?=$students['id'] ?>">upravit</a>
        <a class= "delete-one-student" href="delete-student.php?id=<?= $students ['id']?>">Vymazat</a>
        </div>

        <?php endif; ?>

        
   <?php endif ?>
</section>




    </main>
    <script src="../js/header.js"></script>
    <?php require "../assets/footer.php"; ?>

</body>
</html>
