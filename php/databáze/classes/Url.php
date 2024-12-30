<?php 
class Url{

/**
 * Function redirectUrl
 *
 * Redirects to given path
 *
 * @param string $path
 * @return void
 */
public static function redirectUrl($path){
if (isset ($_SERVER["HTTPS"]) and $_SERVER["HTTPS"] !="off") {
$url_protocol = "https";
} else {
$url_protocol = "http";
}
echo "Úspěšně vložen žák s id: $id";
        header("location:$url_protocol://" .$_SERVER["HTTP_HOST"] . $path);
}
}