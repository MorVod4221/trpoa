<?php
namespace Aleshenko_Pavlov;
use core;

class MyLog extends core\LogAbstract implements core\LogInterface
{
   	public static function log($str)
	{
		self::Instance()->log[] = $str;
	}

   public function _write()
   {
	   if (mkdir("log\\", 0700))
	   {
		$date = new \DateTime();
		$dir_name = "log\/";
		$resdate = $date -> format('Y-m-d\TH-i-s.u').".log";
		file_put_contents($dir_name.$resdate, implode("\n", $this->log), FILE_APPEND);
		echo implode("\n", $this->log);
	   } else die("Ошибка создания log каталога");
   }
   
   public static function write()
   {
		self::Instance()->_write();
   }
}
?>
