<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute Factorial of a Number Problem
 */
class Factorial
{
    /**
     * Function to calculate the Factorial of a number
     * Passing the number as parameter
     * Returns the Factorial of that number
     */
    public function factorial($n)
    {
        $count = 1;
        for($i=$count; $i<=$n;$i++)
        {
            $count *=$i;
            echo $count." ";
        }
        return $count;
    }
}

$factorial = new Factorial();
$n=5;
echo "\nFactorial of ".$n." is:: ".$factorial->factorial($n);