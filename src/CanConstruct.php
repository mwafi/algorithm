<?php

namespace App;

class CanConstruct
{
    public function check(string $target, array $wordBank, int $index = 0, array &$memo = []): bool
    {
        $remaining = substr($target, $index);

        if (array_key_exists($remaining, $memo)) return $memo[$remaining];

        if ($index >= strlen($target)) return $memo[$remaining] = true;

        foreach ($wordBank as $word) {

            if ( str_starts_with($remaining, $word) && $this->check($target, $wordBank, $index + strlen($word), $memo) === true) {

                return $memo[$remaining] = true;

            }

        }

        return $memo[$remaining] = false;
    }
}
