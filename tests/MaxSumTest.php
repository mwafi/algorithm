<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\MaxSum;
class MaxSumTest extends TestCase
{
    /**
     * @dataProvider numbersProvider
     */
    public function testMaxSum(array $numbers, int $expect): void
    {
        $max_sum = new MaxSum();

        $value = $max_sum->calculate($numbers);

        $this->assertEquals($expect, $value);
    }

    public static function numbersProvider(): array
    {
        return [
            [ [5,15,2, -2, -10, 100], 110 ],
            [ [5, 6, 2, -2, -10, 8, 10], 19 ],
            [ [5,5,2, -12, -10, 8, 3], 12 ],
            [ [7, 3, 2, -2, 9, -1, -2, -4, -10, 100, -55, 30], 102 ],
            [ [-1,3,4,-2,5,-7], 10 ],
            [ [2, -1, -2, 1, 3], 4 ],
            [ [1, 2, 3, 4], 10 ],
            [ [1, -2, 5, -3], 5 ],
        ];
    }
}