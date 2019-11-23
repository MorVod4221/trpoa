<?php
//MyLog класс
namespace Aleshenko_Pavlov;

class MyLog extends \core\LogAbstract implements \core\LogInterface
{
   
   	public static function log($str)
	{
		self::Instance()->log[] = $str;
		//return $srtingi;
	}

   public function _write()
   {
		echo implode("\n", $this->log);
		//echo $stringi;
   }
   
   public static function write()
   {
		self::Instance()->_write();
   }
}
?>