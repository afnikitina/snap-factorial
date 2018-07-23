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
	while ($num > 2) {
		return ($num * calcFactorial2 ($num-1));
	}
	return $num;
}

function calcFact($num) {
  while ($num > 2) {
	  return ($num * calcFact($num-1));
  }
  return $num;
}

// test calcFactorial2()
echo calcFactorial(5) ."<br />";
echo calcFactorial("foo") ."<br />";
echo calcFactorial2(21) ."<br />";
echo calcFact(7) ."<br />";
