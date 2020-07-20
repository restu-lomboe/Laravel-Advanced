<?php
    require "Harimau.php";
    require "Elang.php";
    require "Fight.php";

    $elang = new Elang('elang_1');
    echo $elang->atraksi('terbang tinggi');
    echo $elang->getInfoHewan($elang);

    echo "<br>";
    echo "<br>";

    $harimau = new Harimau('harimau_2');
    // echo $harimau->darah;
    echo $harimau->atraksi('lari cepat');
    echo $harimau->getInfoHewan($harimau);

    $harimau_3 = new Harimau('harimau_3');
    // echo $hewan->serang('elang');

    echo "<br>";
    echo "<br>";

    $fight = new Fight();
    echo $fight->serang($elang, $harimau);


    echo "<br>";
    echo "<br>";

    $fight_2 = new Fight();
    echo $fight_2->serang($harimau_3, $elang);

?>