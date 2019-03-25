<?php
$usia = 20; // Variable

if ($usia >= 0 && $usia <=5){ // Jika Usia 0 - 5
    echo "Balita"; // Maka Print Balita
} elseif ($usia > 5 && $usia <= 17){ // Jika Usia 6 - 17
    echo "Anak-anak"; // Maka Print Anak-anak
} elseif ($usia > 17 && $usia <=40){ // Jika Usia 18 - 40
    echo "Pemuda"; // Maka Print Dewasa
} else {
    echo "Dewasa"; // Jika usia tidak ada dari kondisi diatas maka print Dewasa
}

?>