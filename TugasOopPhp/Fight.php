<?php

    class Fight {

        public function diSerang($hewan_1, $hewan_2)
        {
            echo $hewan_1->nama ." sedang diserang ".  $hewan_2->nama;
            echo "<br>";
            echo " Sisa darah sekarang = ". ($hewan_1->darah-$hewan_2->attackPower/$hewan_1->defencePower);
        }

        public function serang($hewan_1, $hewan_2)
        {
            echo $hewan_1->nama ." sedang menyerang " . $hewan_2->nama. "<br>";
            echo $this->diSerang($hewan_1, $hewan_2). "\n";
        }
        
    } 
   
?>