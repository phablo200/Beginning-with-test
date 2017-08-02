<?php

/**
 * Created by PhpStorm.
 * User: phablo sena
 * Date: 02/08/2017
 * Time: 13:08
 */
class DivisionTest extends \PHPUnit_Framework_TestCase
{
    /** @test */

    public function testDivideGivenOperands()
    {
        $division = new \App\Calculator\Division();
        $division->setOperands([100, 2]);

        $this->assertEquals(50, $division->calculate());
    }

    public function testRemoveByZeroOperands()
    {
        $division = new \App\Calculator\Division();
        $division->setOperands(10,0,0,5,0);
        $this->assertEquals(2, $division->calculate());
    }
}