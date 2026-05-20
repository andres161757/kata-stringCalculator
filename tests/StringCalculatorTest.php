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
    public function GivenAnySingleNumberReturnsThatNumber()
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
    /**
     * @test
     */
    public function GivenTwoNumberReturnsSumOfNumbers()
    {
        $calculator = new StringCalculator();
        $resultado = $calculator->add("1,2");
        $this->assertEquals(3, $resultado);
    }
    /**
     * @test
     */
    public function GivenAnyAmountOfNumberReturnsSumOfNumbers()
    {
        $calculator = new StringCalculator();
        $resultado = $calculator->add("1,2,3");
        $this->assertEquals(6, $resultado);
    }
    /**
     * @test
     */
    public function GivenAnyAmountNumberAndArguementWithSaltoReturnsSumOfNumbers()
    {
        $calculator = new StringCalculator();
        $resultado = $calculator->add("1\n2\n3");
        $this->assertEquals(6, $resultado);
    }
    /**
     * @test
     */
    public function GivenAnyAmountNumberAndArguementWithSaltoAndComaReturnsSumOfNumbers()
    {
        $calculator = new StringCalculator();
        $resultado = $calculator->add("1\n2,3");
        $this->assertEquals(6, $resultado);
    }
}