<?php 

require "../classes/Database.php";
require "../classes/Url.php";
require "../classes/User.php";
require "../classes/Auth.php";

session_start ();

if ($_SERVER["REQUEST_METHOD"] === "POST"){

   
    $database = new Database(); 
    $connection = $database ->connectionDB();

    $log_email = $_POST["login-email"];
    $log_password = $_POST["login-password"];
    
   
  
if (User::authentication($connection, $log_email, $log_password)){
 
    $id = User::getUserId($connection, $log_email);
  session_regenerate_id(true);
    $_SESSION["is_logged_in"] = true;

  $_SESSION["logged_in_user_id"] = $id;

  $_SESSION["role"] = User::getUserRole($connection, $id);

  Url::redirectUrl("/php/databáze/admin/students.php");

//   Url::redirectUrl("/databáze/admin/students.php");
        
} else {
    $error = "Chyba při přihlášení";
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
<?php if(!empty($error)): ?>
    <p><?= $error ?></p>
    <a href="../signin.php">Zpět na přihlášení</a>
<?php endif; ?>
</body>
</html>

<!-- object(mysqli_result)#3 (5) { ["current_field"]=> int(0) ["field_count"]=> int(1) ["lengths"]=> NULL ["num_rows"]=> int(1) ["type"]=> int(0) } -->
<!-- object(mysqli_result)#3 (5) { ["current_field"]=> int(0) ["field_count"]=> int(1) ["lengths"]=> NULL ["num_rows"]=> int(0) ["type"]=> int(0) } -->