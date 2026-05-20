<?php

namespace Deg540\StringCalculatorPHP;

class StringCalculator
{
    public function add(string $numbers): int
    {
        if(empty($numbers)) return 0;

        if(!str_contains($numbers, ',')) return (int) $numbers;

        $valores = explode(",", $numbers);
        return $valores[1];
    }
}