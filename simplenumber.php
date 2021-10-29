<?php
// Out simple number
// any number array
// example: $tm = [78, 259, 364, 96, 5, 76, ...];
function simpleIntegers($tm)
{
	function recursiveProcess($tmp, $num)
	{
		$count = 0;
		$t = [];
		$j = 0;
		do {

			$t[$j] = $tmp[$j] == 1 ? 2 : $tmp[$j];
			$j++;

		} while ($j != $num);

			$num >= 2 ? ($c = $num - 1) : $c = $num;

			for ($i = $j; $i < count($tmp); $i++) {

				if ($tmp[$i] % $tmp[$c] != 0) {
					$t[$j] = $tmp[$i];
					$j++;
				} else {
					$count++;
				} 
				
			}

			if ($count != 0) {				
				return recursiveProcess($t, ++$num);
			}
			return $t;
	}

	return recursiveProcess($tm, 1);
}