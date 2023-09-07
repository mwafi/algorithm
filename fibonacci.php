<?php

/**
 * Calculate the Fibonacci number of order "n"
 *
 * @param int $n
 * @param array $memo
 * @return float
 */
function fib(int $n, array &$memo = [0,1,1]) : float {

    return $memo[$n] ??  $memo[$n] = fib($n-1, $memo) + fib($n-2, $memo);

}

$output = fib(500);

echo "$output\n";