<?php 
$angka = 10;
switch ($angka) {
    case "10":
        echo 'yang pertama';    // ini yang akan muncul karena switch case menggunakan operator ==
        break;
    case 10:
        echo 'yang kedua';
        break;
    default:
        echo 'yang ketiga';
        break;
}

?>