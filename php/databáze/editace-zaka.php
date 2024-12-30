<?php 

require "assets/database.php";
require "assets/zak.php";

$connection = connectionDB();

if ( isset($_GET["id"])){
$one_student = getStudent($connection, $_GET ["id"]);
// var_dump($one_student);

if($one_student) {

$first_name = $one_student ["first_name"];
$second_name = $one_student ["second_name"];
$age = $one_student ["age"];
$life = $one_student ["life"];
$college = $one_student ["college"];
$id = $one_student ["id"];
} else { die ("Student nenalezen");
    die ("Student nenalezen");
}
}else {
die ("ID není zadáno, student nebyl nalezen");
}
 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
$first_name = $_POST["first_name"];
$second_name = $_POST["second_name"];
$age = $_POST["age"];
$life = $_POST["life"];
$college =  $_POST["college"];

$sql = "UPDATE student
            SET first_name = ?,
                second_name = ?,
                age = ?,
                life =?,
                college = ?
                WHERE id =?";

                $stmt =mysqli_prepare($connection, $sql);

                if (!$stmt) {
                    echo mysqli_error ($connection);
                } else {
                    mysqli_stmt_bind_param($stmt, "ssissi", $first_name, $second_name, $age, $life, $college, $id);
                    
                if(mysqli_stmt_execute($stmt)) {
                        echo "Informace o žákovi byly upraveny";
         }
    }
}
?>














<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require "assets/header.php" ?>
    <?php require "assets/formular.php" ?>
    <?php require "assets/footer.php" ?>
</body>
</html>