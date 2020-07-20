<?php

    class Hewan {
        public $nama;
        public $darah = 50;
        public $jumlahKaki;
        public $keahlian;

        public function __construct($nama)
        {
            $this->nama = $nama;
            $this->darah;
        }

        public function atraksi($keahlian)
        {  
            echo $this->nama. " sedang " . $this->keahlian = $keahlian;
        }
    } 

        // $hewan = new Hewan('harimau');
        // echo $hewan->atraksi('lari cepat');
        // echo "<br>"
   
?>