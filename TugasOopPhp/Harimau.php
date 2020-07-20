<?php

    require_once "Hewan.php";
    // require_once "Fight.php";


    class Harimau extends Hewan {

        public $keahlian = 'lari cepat';
        public $jumlahKaki = '4';
        public $attackPower  = '7';
        public $defencePower  = '8';
        // 
        public function getInfoHewan()
        {
            echo "<br> Keahlian : " .$this->keahlian;
            echo "<br> Jumlah Kaki : " .$this->jumlahKaki;
            echo "<br> Attack Power : " .$this->attackPower;
            echo "<br> Deffence Power : " .$this->defencePower;
        }
    }

    // $harimau = new Harimau('Harimau');
    // echo $harimau->getInfoHewan();

    // echo "<br>";
    // echo "<br>";

    // $fight = new Fight();
    // echo $fight->serang($harimau);
    // echo "<br>";
    // echo "<br>";
?>