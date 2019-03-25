<?php

$hasil = 76;

if ($hasil <= "75" && $hasil = "0") {
    echo "Maaf, Anda LULUS Ujian SKKNI";
} elseif ($hasil >= "76" && $hasil <= "100") {
    echo "Selamat, Anda LULUS Ujian SKKNI";
} else {
    echo "Anda Tidak Mengikuti Ujian";
}

?>