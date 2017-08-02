<?php
/**
 * Created by PhpStorm.
 * User: phablo sena
 * Date: 02/08/2017
 * Time: 13:11
 */

namespace App\Calculator;


use App\Calculator\Exceptions\NoOperandsException;
use function array_reduce;

class Division extends OperationAbstract implements OperationInterface
{
    public function calculate()
    {
        if (count($this->operands) == 0) {
            throw new NoOperandsException();
        }

       /* $result = 0;
       foreach ($this->operands as $index => $operand) {
            if ($index === 0) {
                $result = $operand;
                continue;
            }

            $result = $result / $operand;
        }*/
        return array_reduce($this->operands, function($a, $b){
            if ($a !== null && $b != null) {
                return $a / $b;
            }

            return $b;
        }, null);
    }
}