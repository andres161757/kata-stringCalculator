<?php

namespace Deg540\StringCalculatorPHP;

class StringCalculator
{
    public function add(string $numbers): int
    {
        if(!($numbers)) return 0;

        if(!str_contains($numbers, ',') && !str_contains($numbers, "\n") && !str_contains($numbers, "//")) return (int) $numbers;
        if(str_contains($numbers, '//')){
            $numbers = str_replace('//', '', $numbers);

            $valores = explode("\n", $numbers);

            $delimitador = $valores[0];

            $valores2 = explode($delimitador, $valores[1]);

            return (int) $valores2[1];
        }
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