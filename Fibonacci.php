<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute Fibonacci Series Problem
 */
class Fibonacci
{
    /**
     * Function to get Fibonacci Series of a Number
     * Passing the Number as a parameter
     * Printing the Fibonacci Series
     */
    public function fibonacci($n)
    {
        $n1 = 0;
        $n2 = 1;
        if ($n <= 1) {
            echo "Fibonacci Series of Number is:: " . $n;
        } else {
            echo "Fibonacci Series of Number " . $n . " is:: ";
            echo $n1." ";
            echo $n2." ";
            for ($i = 3; $i <= $n; $i++) {
                $count = $n1 + $n2;
                $n1 = $n2;
                $n2 = $count;
                echo $count . " ";
            }
        }
    }
}
$fibonacci = new Fibonacci();
$fibonacci->fibonacci(10);