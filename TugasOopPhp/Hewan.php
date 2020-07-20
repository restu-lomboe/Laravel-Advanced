<?php

    class Hewan {
        public $nama;
        public $darah = "50";
        public $jumlahKaki;
        public $keahlian;

        public function __construct($nama)
        {
            echo "Nama Hewan: " .$this->nama = $nama;
            echo "<br>";
            echo "Darah Default: " .$this->darah;
        }

        public function atraksi($keahlian)
        {  
            echo "<br>" .$this->nama. " sedang " . $this->keahlian = $keahlian;
        }
    } 

        // $hewan = new Hewan('harimau');
        // echo $hewan->atraksi('lari cepat');
        // echo "<br>"
   
?>