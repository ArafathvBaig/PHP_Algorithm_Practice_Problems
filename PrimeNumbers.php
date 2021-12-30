<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute PrimeNumbers Problem
 */
class PrimeNumbers
{
    /**
     * Function to get prime numbers between to numbers
     * Passing the two numbers as parameters
     * Printing the Prime Numbers
     */
    public function primeNumbers($start, $end)
    {
        for ($i = $start; $i <= $end; $i++) {
            $flag = 0;
            if (($i <= 0) || $i == 1) {
                echo $i . " is not a Prime Number.\n";
            } elseif ($i == 2) {
                echo $i . " is a Even Prime Number.\n";
            } else {
                for ($j = 1; $j <= $i; $j++) {
                    if (($i % $j) == 0) {
                        $flag++;
                    }
                }
                if ($flag == 2) {
                    echo $i . " ";
                }
            }
        }
    }
}
$primeNumbers = new primeNumbers();
$primeNumbers->primeNumbers(0, 100);
