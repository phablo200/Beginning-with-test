<?php

/**
 * Created by PhpStorm.
 * User: phablo sena
 * Date: 02/08/2017
 * Time: 12:30
 */
class AdditionTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function testCalculate()
    {
        $addition = new \App\Calculator\Addition();
        $addition->setOperands([2, 1]);
        $this->assertEquals(3, $addition->calculate());
    }

    /** @test */

    public function testNoOperandsGiven()
    {
        $this->expectException(\App\Calculator\Exceptions\NoOperandsException::class);
        $addition = new \App\Calculator\Addition();
        $addition->calculate();

    }
}