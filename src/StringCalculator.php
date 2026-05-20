<?php

namespace Deg540\StringCalculatorPHP;

class StringCalculator
{
    public function add(string $numbers): int
    {
        if(empty($numbers)) return 0;

        if(!str_contains($numbers, ',') && !str_contains($numbers, "\n")) return (int) $numbers;
        if(str_contains($numbers, "\n")) {
            $numbers = str_replace("\n", ',', $numbers);
        };

        $valores = explode(',', $numbers);
        $suma = 0;

        for ($i = 0; $i < count($valores); $i++) {
            $suma += (int) $valores[$i];
        }

        return $suma;
    }
}