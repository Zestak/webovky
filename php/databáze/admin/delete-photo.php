<?php 
require "../classes/Auth.php";
require "../classes/Database.php";
require "../classes/Image.php";
require "../classes/Url.php";


session_start();

if (!Auth::isloggedin() ){
    die ("nepovolený přístup");
}
$db = new Database();
$connection = $db->connectionDB();

$user_id = $_GET["id"];
$image_name = $_GET["image_name"];

$image_path = "../uploads/" . $user_id . "/" . $image_name;

if(Image::deletePhotoFromDirectory($image_path)){
    Image::deletePhotoFromDatabase($connection, $image_name);

} Url::redirectUrl("/php/databáze/admin/photos.php");
