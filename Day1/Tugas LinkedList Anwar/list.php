<?php
    require "LinkedList.class.php";
    $antrian = new LinkedList ();

    // Ini Komentar
    // Insert (Saya Tidak Makan Ayam)
    $antrian->insertFirst ("Saya");
    $antrian->insertLast ("Makan");
    $antrian->insertAfter("Makan", "Ayam");
    $antrian->insertBefore("Makan", "Tidak");

    // Ini Komentar
    // Delete (Saya Tidak Makan Ayam -> Makan) HAPUS TANDA // DIBAWAH        
    // $antrian->deleteFirst ("Tidak");
    // $antrian->deleteLast ("Makan");
    // $antrian->delete ("Tidak");
    // $antrian->deleteAll ();

    // Ini Komentar
    // Reverse (Saya Tidak Makan Ayam -> Ayam Makan Tidak Saya) HAPUS TANDA // DIBAWAH
    // $antrian->reverse();

    // Ini Komentar
    // Sort  (Saya Tidak Makan Ayam -> Ayam Makan Saya Tidak) HAPUS TANDA // DIBAWAH
    // $antrian->sort();
 
    echo "<pre>";
    print_r($antrian);
    echo "</pre>";
?>