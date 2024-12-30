<?php 
class Auth{
public static function isloggedin(){
return isset ($_SESSION["is_logged_in"]) and
 $_SESSION ["is_logged_in"];
}
}