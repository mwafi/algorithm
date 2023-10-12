<?php

namespace App;

class MaxSum {
    public function calculate(array $numbers, int $index = 0, array &$memo = []): int
    {
        if ($index >= count($numbers)) return $memo[$index] = 0;

        $this->calculate($numbers, $index + 1, $memo);

        $memo[$index] = max( $numbers[$index], $memo[$index + 1] + $numbers[$index]);

        return max($memo);
    }
}
