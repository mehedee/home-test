<?php

namespace App\Helpers;

class Fibonacci implements FibonacciInterface
{

    public function getValue(int $position): int|null
    {
        $array = [0, 1];
        for ( $i=2; $i<=$position; ++$i ) {
            $array[$i] = $array[$i-1] + $array[$i-2];
        }

        return $array[$position];
    }
}
