<?php
/**
 * Functions to implement a Luhn Checksum on a number of arbitrary length
 */

 // digit doubling function

 function doubleDigit(int $digit) {
     $double = $digit * 2;
     if ($double >= 10) {
         $sum = $double - 9;
         return $sum;
     } else {
         return $double;
     }
 }