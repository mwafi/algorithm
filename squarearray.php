<?php

function squareArray(array $numbers, int $index = 0) : array
{
    if ( $index >= count($numbers) ) return [];

    $squared = array_merge( squareArray( $numbers, $index + 1 ), [$numbers[$index] ** 2] );

    if ($index === 0) sort($squared);

    return $squared;
}

$output = squareArray([-9, -2, 0, 2, 3]);

print_r($output);