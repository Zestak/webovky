<?php
require "../classes/Auth.php";
require "../classes/Database.php";
require "../classes/Url.php";
require "../classes/Student.php";
   session_start ();
   
   if (!Auth::isloggedin() ){
       die ("nepovolený přístup");
   }
   
   

   
    $first_name = null;
    $second_name = null;
    $age = null;
    $life = null;
    $college = null;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $first_name = $_POST["first_name"];
    $second_name = $_POST ["second_name"];
    $age = $_POST ["age"];
    $life = $_POST ["life"];
    $college = $_POST ["college"];

    $database = new Database(); 
    $connection =$database ->connectionDB();

    $id = Student::createStudent($connection, $first_name, $second_name, $age, $life, $college);
    if($id){
    Url::redirectUrl("/php/databáze/admin/one-student.php?id=$id");
    } else {
        echo "Žák nebyl vytvořen";
    }
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
   
<link rel="stylesheet" href="../css/admin-add-student.css">
<link rel="stylesheet" href="../query/admin-add-student-query.css">

    <title>Document</title>
</head>
<body>

<?php require "../assets/admin-header.php";?>

<main>

<section class="add-form">
<?php require "../assets/form-student.php" ?>
</section>

<script src="../js/header.js"></script>
</main>


















<?php require "../assets/footer.php" ?>
</body>
</html>