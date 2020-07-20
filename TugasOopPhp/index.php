<?php
    require "Harimau.php";
    require "Elang.php";
    require "Fight.php";

    $harimau = new Harimau('harimau_1');
    // echo $harimau->darah;
    echo $harimau->atraksi('lari cepat');
    echo $harimau->getInfoHewan();
    // echo $hewan->serang('elang');

    echo "<br>";
    echo "<br>";

    $elang = new Elang('elang_1');
    echo $elang->atraksi('terbang tinggi');
    echo $elang->getInfoHewan();

    echo "<br>";
    echo "<br>";

    $fight = new Fight();
    echo $fight->serang($harimau, $elang);
    echo "<br>";
    echo $fight->diSerang($harimau, $elang);
?>