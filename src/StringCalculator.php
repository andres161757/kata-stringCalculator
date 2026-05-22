<?php

namespace Deg540\StringCalculatorPHP;

class StringCalculator
{
    public function add(string $numbers): int | String
    {
        if(!($numbers)) return 0;

        $negativos = [];

        if(!str_contains($numbers, ',') && !str_contains($numbers, "\n") && !str_contains($numbers, "//")) return (int) $numbers;
        if(str_contains($numbers, '//')){
            $numbers = str_replace('//', '', $numbers);

            $valores = explode("\n", $numbers);

            $delimitador = $valores[0];

            $numeros = explode($delimitador, $valores[1]);

            $suma = 0;
            for ($i = 0; $i < count($numeros); $i++) {
                if (str_contains($numeros[$i], '-')) $negativos[] = $numeros[$i];
                else $suma += (int) $numeros[$i];
            }
            if (empty($negativos)) return $suma;
            else {
                for ($i = 0; $i < count($negativos); $i++) {
                    return "negativos no soportados " . $negativos[$i];
                }
            }
        }
        if(str_contains($numbers, "\n")) {
            $numbers = str_replace("\n", ',', $numbers);
        };

        $valores = explode(',', $numbers);
        $suma = 0;

        for ($i = 0; $i < count($valores); $i++) {
            if (str_contains($valores[$i], '-')) $negativos[] = $valores[$i];
            $suma += (int) $valores[$i];
        }

        if (!empty($negativos)) {
            for ($i = 0; $i < count($negativos); $i++) {
                return "negativos no soportados " . $negativos[$i];
            }
        }

        return $suma;
    }
}