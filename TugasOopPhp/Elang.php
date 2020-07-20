<?php

    require_once "Hewan.php";

    class Elang extends Hewan {

        public $keahlian = 'terbang tinggi';
        public $jumlahKaki = '2';
        public $attackPower  = 10;
        public $defencePower  = 5;
        // 
        public function getInfoHewan($hewan)
        {
            echo "<br> Nama Hewan : " .$hewan->nama. ", ";
            echo "Banyak darah : " .$hewan->darah. ", ";
            echo "Keahlian : " .$this->keahlian. ", ";
            echo "Jumlah Kaki : " .$this->jumlahKaki. ", ";
            echo "Attack Power : " .$this->attackPower. ", ";
            echo "Deffence Power : " .$this->defencePower. ".";

        }
    }

    // $harimau = new Elang('Elang');
    // $harimau->getInfoHewan();
    // echo "<br>";
?>