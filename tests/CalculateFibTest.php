<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Fib;
final class CalculateFibTest extends TestCase
{

    /**
     * @dataProvider fibProvider
     */
    public function testCalculateFib(int $order, float $fib_value): void
    {
        $fib = new Fib();

        $number = $fib->calc($order);

        $this->assertSame($fib_value, $number);
    }

    public static function fibProvider(): array
    {
        return [
            [0, 0],
            [5, 5],
            [8, 21],
            [9, 34],
            [11, 89],
            [17, 1597],
            [22, 17711],
        ];
    }

}