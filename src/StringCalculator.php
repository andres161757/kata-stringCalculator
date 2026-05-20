<?php

namespace Deg540\StringCalculatorPHP;

class StringCalculator
{
    public function add(string $numbers): int
    {
        if(empty($numbers)) return 0;

        if(!str_contains($numbers, ',')) return (int) $numbers;

        $valores = explode(",", $numbers);
        $num1 = (int) $valores[0];
        $num2 = (int) $valores[1];
        $sum = $num1 + $num2;
        return $sum;
    }
}