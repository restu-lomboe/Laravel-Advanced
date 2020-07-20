<?php

    require_once "Hewan.php";

    class Elang extends Hewan {

        public $keahlian = 'terbang tinggi';
        public $jumlahKaki = '2';
        public $attackPower  = '10';
        public $defencePower  = '5';
        // 
        public function getInfoHewan()
        {
            echo "<br> Keahlian : " .$this->keahlian;
            echo "<br> Jumlah Kaki : " .$this->jumlahKaki;
            echo "<br> Attack Power : " .$this->attackPower;
            echo "<br> Deffence Power : " .$this->defencePower;

        }
    }

    // $harimau = new Elang('Elang');
    // $harimau->getInfoHewan();
    // echo "<br>";
?>