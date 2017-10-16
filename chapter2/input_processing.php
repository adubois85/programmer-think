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

 // use a regular expression to strip any non-number characters from our input

 function removeNonNumbers($input) {
	$result = preg_replace("/\D/", "", $input);
	return $result;
 }

 // We'll cast our input to an array and use that to do our math
 // We'll also start filling from right to left for ease later on

 function fillArray($input){
	 $array = array();
	 for($i = strlen($input) - 1; $i >= 0; $i--){
		 $array[] = $input[$i];
	 }
	 return $array;
 }