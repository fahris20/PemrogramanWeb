<?php
$cookie_name = "Fhanzz";
$cookie_value = "Samudra";

setcookie($cookie_name,$cookie_value, time()+3600, "/");

if(isset($_COOKIE[$cookie_name])){
    echo "Cookie " . $cookie_name . " Telah diatur!<br/>";
    echo "Nilainya adalah " . $_COOKIE[$cookie_name];
}else {
    echo "Nama cookie ". $cookie_name . " Tidak Diatur";
}
?>