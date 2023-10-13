<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\MaxAdjacentSum;
class MaxAdjacentSumTest extends TestCase
{
    /**
     * @dataProvider numbersProvider
     */
    public function testMaxSum(array $numbers, int $expect): void
    {
        $adjacent_sum = new MaxAdjacentSum();

        $value = $adjacent_sum->calculate($numbers);

        $this->assertEquals($expect, $value);
    }

    public static function numbersProvider(): array
    {
        return [
            [ [ 3 ], 3 ],
            [ [ -5, -2, -1], -1 ],
            [ [1, 2, 3], 6 ],
            [ [-1, 5, 1], 6 ],
            [ [2, -1 , 3], 4 ],
            [ [2, -5, 3, -1], 3 ],
            [ [2, -5, 3, -1, 2], 4 ],
        ];
    }
}