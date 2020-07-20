<?php

    class Fight {

        public function serang($hewan_1, $hewan_2)
        {
            echo $hewan_1->nama ." sedang menyerang " . $hewan_2->nama;
        }
        public function diSerang($hewan_1, $hewan_2)
        {
            echo $hewan_1->nama ." sedang diserang ";
            echo "<br>";
            echo " darah sekarang tersisa= ".($hewan_1->darah-($hewan_1->darah-$hewan_2->attackPower)/$hewan_1->defencePower);
        }
    } 
   
?>