<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute Palindrome of a Number Problem
 */
class Palindrome
{
    /**
     * Function to Check Number is Palindrome
     * Passing the number as Parameter
     * Prints the message of palindrome or not
     */
    public function palindrome($n)
    {
        $sum = 0;
        $temp = $n;
        while ($temp > 0) {
            $r = floor($temp % 10);
            $sum = ($sum * 10) + $r;
            $temp = floor($temp / 10);
        }
        if ($n == $sum) {
            echo "The given number " . $n . " is Palindrome";
        } else {
            echo "The given number " . $n . " is Not Palindrome";
        }
    }
}
$palindrome = new Palindrome();
$palindrome->palindrome(121);
