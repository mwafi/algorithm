<?php

use PHPUnit\Framework\TestCase;
use App\LowestPositiveInt;

final class LowestPositiveIntTest extends TestCase
{

    /**
     * @dataProvider arraysOfIntegers
     */
    public function testPushAndPop(array $numbers, int $expected): void
    {
        $lowest_positive = new LowestPositiveInt();

        $number = $lowest_positive->find($numbers);

        $this->assertEquals($expected, $number);
    }

    public static function arraysOfIntegers(): array
    {
        return [
            'Ordered and adjacent positive numbers start with 1' => [ [1,2,3,4,5,6], 7 ],
            'Ordered and adjacent positive and negative numbers start with -3' => [ [-3,-2,-1,0,1,2], 3 ],
            'Missing 1' => [ [5,4,7], 1 ],
            'Inordered adjacent positive numbers' => [ [9,8,7,6,5,4,3,2,1], 10 ],
            'Reversed ordered adjacent positive numbers' => [ [8,7,6,5,4,3,2,1], 9 ],
            'Reversed ordered nonadjacent positive numbers' => [ [9,8,7,6,4,3,2,1], 5 ],
            'Non-ordered and nonadjacent positive and negative numbers' => [ [-2,-3,0,1,-9,9,11,2], 3 ],
        ];
    }
}