<?php
namespace Aleshenko_Pavlov;

class Equation
{
	protected $x;
	public function equation($a,$b)
	{
		if($a==0)
		{
			throw new pitu4_Exception("yravnenie ne syshestvyet \n");
		}
		return $this->x=array(-$b/$a);
	}
}
?>