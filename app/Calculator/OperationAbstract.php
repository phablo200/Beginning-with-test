<?php
/**
 * Created by PhpStorm.
 * User: phablo sena
 * Date: 02/08/2017
 * Time: 13:16
 */

namespace App\Calculator;


abstract class OperationAbstract
{
    protected $operands;

    public function setOperands($operands)
    {
        $this->operands = $operands;
    }
}