<?php
$kalimat = "Ini adalah contoh kalimat untuk dihitung jumlah hurufnya.";
$kalimat = str_replace(' ', '', $kalimat); // Menghapus spasi jika spasi tidak mau ikut terhitung

// jika di javascript
// var kalimatBaru = kalimat.replace(" ", "")

$jumlah_huruf = strlen($kalimat);
echo "Jumlah huruf dalam kalimat tersebut adalah: $jumlah_huruf";
?>
