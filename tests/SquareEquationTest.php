<?php
require_once ('./Aleshenko_Pavlov/Equation.php');
require_once ('./Aleshenko_Pavlov/SquareEquation.php');
require_once ('./Aleshenko_Pavlov/pitu4_Exception.php');

class SquareEquationTest extends PHPUnit\Framework\TestCase
{
    /**
    * @dataProvider providerDiskr
    */
    public function testDiskr($r,$a,$b,$c){
        $my = new Aleshenko_Pavlov\SquareEquation();
        $this->assertEquals(-23, $my->diskr(2,3,4));
    }

    public function providerDiskr()
    {
        return array(
            array(-23, 2, 3, 4),
            array(68, 4, 10, 2),
            array(0, 2, 4, 2)
        );
    }
    /**
    * @dataProvider providerSolve
    */

    public function testSolve($r, $a, $b, $c)
    {
        $my = new Aleshenko_Pavlov\SquareEquation();
        $this->assertEquals($r, $my->solve($a, $b, $c));
    }
   
    public function providerSolve()
    {
        return array(
            array(array(-0.5), 4, 4, 1),
            array(array(3), 0, -2, 6),
            array(array(-5, -9), 1, 14, 45),
        );
    }

    /**
    * @dataProvider providerExceptionSolve
    */
    public function testExceptionSolve($a, $b, $c)
    {
        $this->expectException(Aleshenko_Pavlov\pitu4_Exception::class);
        $my = new Aleshenko_Pavlov\SquareEquation();
        $my->solve($a, $b, $c);
    }

    public function providerExceptionSolve()
    {
        return array(
            array(-5, 3, -5),
            array(-8, 4, -1),
        );
    }
}


?>