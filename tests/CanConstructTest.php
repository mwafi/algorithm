<?php

namespace Tests;

use App\CanConstruct;
use PHPUnit\Framework\TestCase;

class CanConstructTest extends TestCase
{
    /**
     * @dataProvider words
     */
    public function testConstruction(string $target, array $wordBank, bool $expectation): void
    {
        $construct = new CanConstruct();

        $status = $construct->check($target, $wordBank);

        $this->assertSame($expectation, $status);
    }

    public static function words(): array
    {
        return [
            ['test', ['te', 'st'], true],
            ['test', ['te', 'ee'], false],
            ['loveyou', ['u', 'love', 'yo'], true],
            ['mmg', ['mmmg', 'g', 'mm'], true],
            ['mmg', ['mmmg', 'g', 'gg'], false],
            ['mmgs', ['mmmg', 'g', 'gg', 'ms', 'gs', 'm'], true],
            ['hhhhhhhhhhhhhhhhhhhhhf', ['h', 'h', 'hh', 'hhh', 'hhhhh', 'hhhhhh', 'hhhhhhh'], false],
            ['hhhhhhhhhhhhhhhhhhhhhf', ['hf', 'hh', 'hhh', 'hhhhh', 'hhhhhh', 'hhhhhhh'], true],
        ];
    }

}