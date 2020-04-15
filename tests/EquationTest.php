<?php
require_once ('./Aleshenko_Pavlov/Equation.php');
require_once ('./Aleshenko_Pavlov/pitu4_Exception.php');

class EquationTest extends PHPUnit\Framework\TestCase
{
     /**
    * @dataProvider providerEquation
    */
    public function testEquation($a, $b, $c){
        $my = new Aleshenko_Pavlov\Equation();
        $this->assertEquals($c, $my->equation($a,$b));
    }

    public function providerEquation()
    {
        return array(
            array (3, 6, array(-2)),
            array (1, 1, array(-1)),
            array (5, -10, array(2))
        );
    }

    public function testExceptionEquation(){
        $this->expectException(Aleshenko_Pavlov\pitu4_Exception::class);
        $my = new Aleshenko_Pavlov\Equation();
        $my->equation(0,1);
    }
}


?>