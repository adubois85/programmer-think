<?php
/**
 * An algorithm for sorting using an insertion method
 */

 function sortInsertion(array $inputArray){
	// note: create a variable that stores the size of the array so you aren't counting it with every iteration of a for loop; otherwise, a foreach loop will also work and is very slightly faster
	$arraySize = count($inputArray);
	// create a temporary array with the first element from our input as its first element as well so we can compare later elements to it for the sorting
	$tempArray = $inputArray[0];

	//If the input is a single number, then it is, by definition, already sorted
	if ($arraySize == 1){
		return $tempArray;
	}

	// outer loop to go through each item in the array
	for ($i = 1; $i < $arraySize; $i++){
		// inner loop compares the current value with previous values and sorts it accordingly
		for($j = $i; $tempArray[$j] > $tempArray[$j - 1]; $j--){
			$temp = $tempArray[$j - 1];
			$tempArray[$j - 1] = $tempArray[$j];
			$tempArray[$j] = $temp;
		}
	}
}