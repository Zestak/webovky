<?php 
// function string_length($str, $min_length){
//     if (strlen($str)<$min_length){
// throw new Exception ("Váš text je příliš krátký");
//     }
//     return true;
// }


// try {
// string_length("sup", 5);
// echo "Váš text je v pořádku";
// } catch (Exception $e){
//     echo $e->getMessage();

// }
echo "<br>";
$n1 = 50;
$n2 = 0;


try {
    if ($n2 === 0){
        throw new Exception ("Dělení nulou je zakázané");
    }
$result = $n1 / $n2;
echo $result;

}catch (Exception $e){
    error_log("Chyba č. 1 (dělení nulou)", 3, "../errors/error.log");
    echo "Typ chyby: " . $e->getMessage();
}