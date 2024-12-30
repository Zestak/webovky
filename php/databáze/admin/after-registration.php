<?php 

require "../classes/Url.php";
require "../classes/Database.php";
require "../classes/User.php";


session_start();

if ($_SERVER["REQUEST_METHOD"]==="POST") {

   
    $database = new Database(); 
    $connection =$database ->connectionDB();

    $first_name = $_POST ["first-name"];
    $second_name = $_POST ["second-name"];
    $email = $_POST ["email"];
    $password = password_hash($_POST ["password"], PASSWORD_DEFAULT);
   $role = "user";

    $id = User::CreateUser($connection, $first_name, $second_name, $email, $password, $role);


if(!empty($id)){
    // Zabraňuje provedení tzv. fixation attack. Více zde: https://owasp.org/www-community/attacks/Session_fixation
    session_regenerate_id(true);

    $_SESSION["is_logged_in"] = true;
    // Nastavení ID uživatele
    $_SESSION["logged_in_user_id"] = $id;
    // nastavení role uživatele
    $_SESSION["role"] = $role;
    Url::redirectUrl("/php/databáze/admin/students.php");
} else {
    echo "Uživatele se nepodařilo přidat";
}
} else {
echo "Nepovolený přístup";
}