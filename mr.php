<?php
require_once "mt.html";
class Vaikine extends Darbas {
    public function skaiciavimo($a, $b) {
        $masyvas = array(); 

        for ($i = $a; $i <= $b; $i++) {
            $x = $i;
            $iteracijos = 0;
            while ($x != 1) {
                if ($x % 2 == 0) {
                    $x = $x / 2;
                } else {
                    $x = 3 * $x + 1;
                }
                $iteracijos++;
            }

            
            if (isset($masyvas[$iteracijos])) {
                $masyvas[$iteracijos]++;
            } else {
                $masyvas[$iteracijos] = 1;
            }
        }

        
        return $masyvas;
    }

    public function rez($a, $b) {
        echo "<br>";
        $masyvas = $this->skaiciavimo($a, $b);
        ksort($masyvas);
        
        foreach ($masyvas as $iteracija => $daznis) {
            echo "Iteracija: $iteracija; Dažnis: $daznis <br>";
        }
    }
}
$vaikine = new Vaikine();
?>