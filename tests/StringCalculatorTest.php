<?php

declare(strict_types=1);

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\StringCalculator;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function GivenEmptyStringReturns0()
    {
        $calculator = new StringCalculator();
        $resultado = $calculator->add("");
        $this->assertEquals(0, $resultado);
    }

    /**
     * @test
     */
    public function GivenAnyNumberReturnsThatNumber()
    {
        $calculator = new StringCalculator();
        $resultado = $calculator->add("3");
        $this->assertEquals(3, $resultado);
    }

    /**
     * @test
     */
    public function GivenInvalidArgumentReturnsZero()
    {
        $calculator = new StringCalculator();
        $resultado = $calculator->add("arbol");
        $this->assertEquals(0, $resultado);
    }
}