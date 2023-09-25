<?php
function firstMissingPositive(array $nums): int {

    $n = count($nums);

    $seen = array_fill(0, $n + 1, false);

    for ($i = 0; $i < $n; $i++) {

        if ($nums[$i] > 0 ) $seen[$nums[$i]] = true;

    }

    for ($i = 1; $i <= $n; $i++) {

        if ( $seen[$i] === false ) return $i;

    }

    return $n + 1;
}

//$output = firstMissingPositive([3, 4, 5, 1, 2]);
$output = firstMissingPositive([1, 5, 2, 3]);
//$output = firstMissingPositive([1, 2, 3]);

echo "$output\n";