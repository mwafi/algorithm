<?php

namespace App;

class Fib
{
    public function calc (int $n, array &$memo = [0, 1]): float
    {
        return $memo[$n] ?? $memo[$n] = $this->calc($n-1, $memo) + $this->calc($n-2, $memo);
    }
}