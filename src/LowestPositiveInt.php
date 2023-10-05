<?php

namespace App;

class LowestPositiveInt
{
    public function find (array $numbers) : int
    {
        $numbers_status = array_fill(0, count($numbers) + 1, false);

        foreach ($numbers as $number) {

            if ( $number > 0 ) $numbers_status[$number] = true;

        }

        for ($i = 1; $i < count($numbers_status); $i++) {

            if ($numbers_status[$i] === false) return $i;

        }

        return count($numbers_status);

    }
}

