<?php

function calcFactorial ($num) {
	try {
		if (!is_numeric($num)) {
			throw(new InvalidArgumentException("function argument must be numeric"));
		} else if ($num > 20) {
			throw(new RangeException("number can not larger than 20"));
		}
	} catch (Exception $e) {
		echo $e->getMessage();
		return -1;
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
echo calcFactorial(5) ."<br />";

// creating a function that recurrently calls itself whille the condition holds true
function calcFactorial2 ($num) {
	try {
		if(!is_numeric($num)) {
			throw(new InvalidArgumentException("function argument must be numeric"));
		} else if($num > 20) {
			throw(new RangeException("number can not larger than 20"));
		}
	} catch (Exception $e) {
		echo $e->getMessage();
		return -1;
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
echo calcFactorial("foo") ."<br />";
echo calcFactorial2(21) ."<br />";
