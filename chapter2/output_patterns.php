<?php
function halfSquare() {
	for($i = 5; $i >= 1; $i--) {
		for ($j = $i; $j >= 1; $j--){
			echo '#';
		}
		echo"\r\n";
	}
};

halfSquare();

function fullSquare() {
	for($i = 1; $i <= 5; $i++) {
		for($j = 1; $j <= 5; $j++){
			echo '#';
		}
		echo"\r\n";
	}
};

fullSquare();

function line(){
	for($i = 1; $i <=5; $i++) {
		echo '#';
	}
};

line();

function sidewaysTriangle() {
	for ($i = -3; $i <= 3; $i++) {
		for ($j = 1; $j <= 4 - abs($i); $j++) {
			echo '#';
		}
		echo "\r\n";
	} 

}

sidewaysTriangle();