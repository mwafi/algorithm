<?php
function overLapping(array $lists, ?int $start = null): array
{
    if ( empty($lists) ) return [];

    $fullPath = [];

    for ( $i = 0; $i < count($lists); $i++) {

        if ( !!! is_null($start) || $start > $lists[$i][0] ) continue;

        $arr = array_values(array_filter($lists, fn($value, $key) => $i < $key, ARRAY_FILTER_USE_BOTH));

        $path = overLapping($arr, $lists[$i][1]);

        if (empty($fullPath) || $lists[$i][1] > $fullPath[0][1]) $fullPath = array_merge([$lists[$i]], [$path]);
    }

    return $fullPath;
}

$output = overLapping([ [1, 3], [5, 8], [4, 1], [20, 5] ]);

print_r($output);