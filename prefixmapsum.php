<?php

class PrefixMapSum
{
    private array $data;

    public function insert(string $key, int $value): void
    {
        $this->data[$key] = $value;
    }

    public function sum(string $prefix): int
    {
        return array_sum(array_filter($this->data, fn($value, $key) => str_starts_with($key, $prefix), ARRAY_FILTER_USE_BOTH));
    }
}

$mapsum = new PrefixMapSum();

$mapsum->insert("columnar", 3);
echo $mapsum->sum("col")."\n";

$mapsum->insert("column", 2);
echo $mapsum->sum("col")."\n";