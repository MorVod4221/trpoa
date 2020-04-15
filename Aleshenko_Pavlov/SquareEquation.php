<?php
namespace Aleshenko_Pavlov;
use core;

class SquareEquation extends Equation implements core\EquationInterface
{
	protected $dis;
	
	public function diskr($a,$b,$c)
	{
		$dis=$b*$b-4*$a*$c;
		return $this->dis=$dis;
	}
	
	public function solve($a,$b,$c)
	{
		$this -> diskr($a, $b, $c);
		
		if($a==0)
		{
			return $this->equation($b,$c);
		}
		if($this->dis==0)
		{	
			return $this->x=array(-$b/(2*$a));
		}
		if($this->dis<0)
		{
			throw new pitu4_Exception("Diskriminant menshe nulya. Net resheniy \n");
		}
		$x1=((-$b+sqrt($this->dis))/(2*$a));
		$x2=((-$b-sqrt($this->dis))/(2*$a));
		return $this->x = array($x1, $x2);
		
	}
}
?>