<?php
require_once "mt.html";

class Darbas {
    public $ss;

    public function antras($a, $b) {
        function interacija($skaicius) {
            $s = 0;
            while ($skaicius != 1) {
                if ($skaicius % 2 == 0) {
                    $skaicius = $skaicius / 2;
                    $s++;
                } else if ($skaicius % 2 != 0) {
                    $skaicius = 3 * $skaicius + 1;
                    $s++;
                }
            }
            return $s;
        }

        function didreiksme($skaicius) {
            $maxsk = $skaicius;
            while ($skaicius != 1) {
                if ($skaicius % 2 == 0) $skaicius = $skaicius / 2;
                else if ($skaicius % 2 != 0) $skaicius = 3 * $skaicius + 1;
                if ($skaicius > $maxsk) $maxsk = $skaicius;
            }
            return $maxsk;
        }

        $interacijamax = 0;
        $interacijamin = PHP_INT_MAX;
        $maxsks = array();
        for ($i = $a; $i <= $b; $i++) {
            $x = interacija($i);
            if ($x > $interacijamax) $interacijamax = $x;
            if ($x < $interacijamin) $interacijamin = $x;
            $maxsks[$i] = didreiksme($i);
            $maxsks1[$i] = didreiksme($i);
        }
        for ($i = $a; $i <= $b; $i++) {
            if ($interacijamax == interacija($i)) echo "Daugiausiai iteracijų turi skaičius $i ir jų yra $interacijamax <br>";
            if ($interacijamin == interacija($i)) echo "Mažiausiai iteracijų turi skaičius $i ir jų yra $interacijamin <br>";
        }
        $k = $i;
        for ($t = $a; $t <= $b - 1; $t++) {
            for ($i = $a; $i <= $b - 1; $i++) {
                $temp = 0;
                if ($maxsks[$i] < $maxsks[$i + 1]) {
                    $temp = $maxsks[$i];
                    $maxsks[$i] = $maxsks[$i + 1];
                    $maxsks[$i + 1] = $temp;
                }
            }
        }
        echo "Didžiausia reikšme($maxsks[$a]) pasiekė skaičiai:";
        for ($i = $a; $i <= $b; $i++) {
            if ($maxsks[$a] == $maxsks1[$i]) echo " $i, ";
        }
    }

    public function pirmas($x) {

        function skaiciavimas($x, &$ss) {
            if ($x % 2 == 0) return $x / 2;
            return $x * 3 + 1;
        }
        echo "Skaičius $x reikšmės: <br>";
        while (skaiciavimas($x, $ss) != 1) {
            $x = skaiciavimas($x, $ss);
            $ss++;
            echo "$x <br>";
        }
        echo "1 <br> ";
        $ss++;
        echo "Iš viso iteracijų buvo: $ss";
    }

    public function progresija($ba, $ca, $ad){
        echo "$ba ,";
        for($i = 1; $i <= $ca; $i++){
            $ba = $ba + $ad;
            echo " $ba,";
        }
        echo "<br>$ca narys yra $ba";
    }
}


$darbas = new Darbas();
?>
