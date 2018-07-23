<?php

function calcFactorial ($num) {
	try {
		if (!is_numeric($num)) {
			throw(new InvalidArgumentException("function argument must be numeric"));
		}
	} catch (Exception $e) {
		echo $e->getMessage();
		return 0;
	}
	if (!is_int($num)) {
		$num = (int)$num;
	} else if ($num === 0) {
		$num = 1;
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
		echo $e->getMessage();
		return 0;
	}
	if (!is_int($num)) {
		$num = (int)$num;
	} else if ($num === 0) {
		$num = 1;
	}
	while ($num > 1) {
		return ($num * ($num-1));
	}
	return $num;
}

// test calcFactorial2()
echo calcFactorial("foo");
