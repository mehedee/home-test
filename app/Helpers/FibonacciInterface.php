<?php

namespace App\Helpers;

interface FibonacciInterface
{
    public function getValue(int $position): int|null;
}
