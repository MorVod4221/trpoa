<?php
namespace Aleshenko_Pavlov;

ini_set('display_errors', 1);
error_reporting(-1);

include_once('core/EquationInterface.php');
include_once('core/LogAbstract.php');
include_once('core/LogInterface.php');
include_once('Aleshenko_Pavlov/Equation.php');
include_once('Aleshenko_Pavlov/SquareEquation.php');
include_once('Aleshenko_Pavlov/MyLog.php');
include_once('Aleshenko_Pavlov/pitu4_Exception.php');

echo "Vvedite tri 4isla. \n";
$perem = explode(" ", fgets(STDIN));
try
{
	$file = fopen("version", "r");
	MyLog::log("Выполняется с верисии: ".fgets($file));
	echo "Version: ".fgets($file, 4096);
	fclose($file);

	if (count($perem) != 3) 
	{						
		throw new pitu4_Exception("Ne tri 4isla. Poshel von.");
	} 
	else 
	{
		$a = (float)$perem[0];
		$b = (float)$perem[1];
		$c = (float)$perem[2];
	}
	$square = new SquareEquation();
	MyLog::log("Korni yravneniya:" . implode(' ', $square->solve($a, $b, $c)));
}
catch (pitu4_Exception $e) 
{
	 echo $e->getMessage();
	 MyLog::log($e);
}
	MyLog::write()."\n";
?>
