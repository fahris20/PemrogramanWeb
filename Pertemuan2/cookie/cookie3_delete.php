<?php
setcookie("Fhanzz", "", time() - 3600, "/");

if(isset($_COOKIE['Fhanzz'])){
    echo "Cookie " . 'Fhanzz' . " Telah diatur!<br/>";
    echo "Nilainya adalah " . $_COOKIE['Fhanzz'];
}else {
    echo "Nama cookie ". 'Fhanzz' . " Tidak Diatur";
}
?>