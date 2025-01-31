<?php

    // require "../assets/database.php";
    // require "../assets/zak.php";
    // require "../assets/auth.php";
    // require "../assets/url.php";
    require "../classes/Database.php";
    require "../classes/Url.php";
    require "../classes/Student.php";
    require "../classes/Auth.php";
    

    session_start();

    if ( !Auth::isLoggedIn() ){
        die("Nepovolený přístup");
    }
    $role = $_SESSION["role"];

    // $connection = connectionDB();
    $database = new Database();
    $connection = $database->connectionDB();

    if ( isset($_GET["id"]) ){
        $one_student = Student::getStudent($connection, $_GET["id"]);

        if ($one_student) {
            $first_name = $one_student["first_name"];
            $second_name = $one_student["second_name"];
            $age = $one_student["age"];
            $life = $one_student["life"];
            $college = $one_student["college"];
            $id = $one_student["id"];

        } else {
            die("Student nenalezen");
        }

    } else {
        die("ID není zadáno, student nebyl nalezen");
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $first_name = $_POST["first_name"];
        $second_name = $_POST["second_name"];
        $age = $_POST["age"];
        $life = $_POST["life"];
        $college = $_POST["college"];

        if(Student::updateStudent($connection, $first_name, $second_name, $age, $life, $college, $id)){
            Url::redirectUrl("/php/databáze/admin/one-student.php?id=$id");
        };
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../query/header-query.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="https://kit.fontawesome.com/0fe3234472.js" crossorigin="anonymous"></script>
   
   <link rel="stylesheet" href="../css/admin-edit-student.css">
   <link rel="stylesheet" href="../query/admin-edit-student-query.css"> 


    <title>Document</title>
</head>
<body> 
    <?php require "../assets/admin-header.php"; ?>

<main> 
    <?php 

if ($role === "admin") {
     require "../assets/form-student.php";
    } else {
        echo "<h1>Obsaj stránky je k dispozici pouze administrátorům</h1>";
    }

    ?>
    </main>


    <?php require "../assets/footer.php"; ?>
    <script src="../js/header.js"></script>
</body>
</html>