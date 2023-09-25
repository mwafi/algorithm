<?php

function probability(array $numbers, array $probability): array
{
    $total_probability = array_sum(($probability));
    $response = [];
    for ($i = 0; $i < count($numbers); $i++) {
        $response[$numbers[$i]] = ($probability[$i] / $total_probability) * 100;
    }

    return $response;
}

//$output = probability([1, 2, 3, 4], [0.1, 0.5, 0.2, 0.2]);
$output = probability([10, 30, 20, 40], [1, 6, 2, 1]);

print_r($output);