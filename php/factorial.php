<?php

function calcFactorial: int (int $num) {
	int $result = $num;
	for (int $i = $num-1; $i >=1; $i--) {
		$result *= $i;
	}
	return $result;
}

