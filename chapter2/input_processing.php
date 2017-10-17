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

// we'll cast our input to an array and use that to do our math
// we'll also start filling from right to left for ease later on

function fillArray($input){
	$array = array();
	for($i = strlen($input) - 1; $i >= 0; $i--){
		$array[] = $input[$i];
	}
	return $array;
}

// bringing it all together, the math part of the algorithm where we add all of the digits

function luhnCheck($number) {
	// strip the non-numbers from our input
	$number = removeNonNumbers($number);
	//cast them to an array in reverse order
	$array = fillArray($number);
	// the value where we'll store the sum of the digits
	$sum = 0;
	foreach($array as $key => $value) {
		if(($key + 1) % 2 === 0){
			$sum += doubleDigit($value);
		} 
		else {
			$sum += $value
		}
	}
	if($sum % 10 === 0){
		echo"The entered number is valid.\n";
	}
	else{
		echo"The number entered is not valid.\n";
	}
}