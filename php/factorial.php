<?php

function calcFactorial ($num) {
	if (!is_int($num)) {
		$num = (int)$num;
	}
	$result = $num;
	for ($i = $num-1; $i >=1; $i--) {
		$result *= $i;
	}
	return $result;
}

// creating a function that recurrently calls itself whille the condition holds true
function calcFactorial2 ($num) {
	if (!is_int($num)) {
		$num = (int)$num;
	}
	while ($num > 1) {
		return ($num * ($num-1));
	}
	return $num;
}

