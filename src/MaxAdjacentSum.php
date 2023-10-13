<?php

namespace App;

class MaxAdjacentSum {
    public function calculate(array $numbers, int $index = 0, array &$sums = []): int
    {
        if ( $index + 1 == count($numbers) ) return $sums[$index] = $numbers[$index];

        $this->calculate($numbers, $index + 1, $sums);

        $sums[$index] = max( $numbers[$index], $sums[$index + 1] + $numbers[$index]);

        return max($sums);
    }
}
