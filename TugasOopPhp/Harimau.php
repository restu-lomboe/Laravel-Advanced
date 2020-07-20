<?php

    require_once "Hewan.php";
    // require_once "Fight.php";


    class Harimau extends Hewan {

        
        public $keahlian = 'lari cepat';
        public $jumlahKaki = '4';
        public $attackPower  = '7';
        public $defencePower  = '8';
        // 
        public function getInfoHewan($hewan)
        {
            echo "<br> Nama Hewan : " .$hewan->nama. ", ";
            echo "Keahlian : " .$this->keahlian. ", ";
            echo "Jumlah Kaki : " .$this->jumlahKaki. ", ";
            echo "Attack Power : " .$this->attackPower. ", ";
            echo "Deffence Power : " .$this->defencePower. ".";
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