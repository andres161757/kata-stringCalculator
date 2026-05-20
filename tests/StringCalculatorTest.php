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
    public function GivenEmptyStringReturn0()
    {
        $calculator = new StringCalculator();
        $resultado = $calculator->add("");
        $this->assertEquals(0, $resultado);
    }
}