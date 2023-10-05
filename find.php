<?php

function find(string $s, array $words, int $index = 0, array $disabled_indexes = []): array
{
    if ( count($disabled_indexes) === count($words) ) return [0];

    $full_return = [];

    for ($i = $index; $i < strlen($s); $i++) {

        foreach ($words as $j => $word) {

            if (in_array($j, $disabled_indexes) === true || !!! str_starts_with(substr($s, $i), $word)) continue;

            $return = find( $s, $words, strlen($word) + $i, array_merge($disabled_indexes, [$j]) );

            if ( !!! empty($return)) $full_return = array_merge( [$i], $full_return );
        }

        if ( $index > 0 ) break;

    }

    return $full_return;
}


//$output = find("dogcatcatcodecatdog", ["dog", "cat"]);
//$output = find("barfoobazbitbyte", ["dog", "cat"]);
//$output = find("hahla", ["a", "h"]);
$output = find("haha", ["a", "h"]);


print_r($output);