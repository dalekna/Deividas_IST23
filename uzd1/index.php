<?php

function funkcija($n) {
    $iterations = 0;
    $max = 0;
    echo "Sekos reikšmės: ";
    
    while ($n != 1) {
        echo $n . " ";
        if ($n % 2 == 0) {
            $n = $n / 2;
        } else {
            $n = 3 * $n + 1;
        }
        if(
            $n>$max
        )
        {
            $max=$n;
        }
        $iterations++;
    }
    echo "1\n";
    return $iterations;
    return $max;
}
$number = 151; 
$iterations = funkcija($number);
echo "<br>iteracijų kiekis: " . $iterations;
echo "<br>maximalus sakičius: " . $max;
?>
