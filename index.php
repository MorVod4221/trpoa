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

MyLog::write()."\n";
?>