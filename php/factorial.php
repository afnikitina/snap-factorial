<?php

function calcFactorial ($num) {
	try {
		if (!is_numeric($num)) {
			throw(new InvalidArgumentException("function argument must be numeric"));
		}
	} catch (Exception $e) {
		return 0;
	}
	if (!is_int($num)) {
		$num = (int)$num;
	}
	$result = $num;
	for ($i = $num-1; $i >=1; $i--) {
		$result *= $i;
	}
	return $result;
}

// test calcFactorial()
echo calcFactorial(5);

// creating a function that recurrently calls itself whille the condition holds true
function calcFactorial2 ($num) {
	try {
		if (!is_numeric($num)) {
			throw(new InvalidArgumentException("function argument must be numeric"));
		}
	} catch (Exception $e) {
		return 0;
	}
	if (!is_int($num)) {
		$num = (int)$num;
	}
	while ($num > 1) {
		return ($num * ($num-1));
	}
	return $num;
}

// test calcFactorial2()
echo calcFactorial("foo");
