<?php

namespace App;

class CanConstruct
{
    public function check(string $target, array $wordBank, int $index = 0, array &$memo = []): bool
    {
        $t = substr($target, $index);

        if ( array_key_exists($t, $memo) ) return $memo[$t];

        if ( empty($t) ) return $memo[$t] = true;

        foreach ($wordBank as $word) {

            if ( str_starts_with($t, $word) && $this->check($t, $wordBank, strlen($word), $memo) === true)  return $memo[$t] = true;

        }

        return $memo[$t] = false;
    }
}
