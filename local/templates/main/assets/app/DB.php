<?php
	
namespace App;

use PDO;

class DB
{
	protected static $connected = 0;
	public static $dbc;
	
	public static function connection()
	{
		if (self::$connected == 0) {
			self::$dbc = new PDO("mysql:host=localhost;dbname=news;charset=utf8", "root", "root");
		}
		return self::$dbc;
	}
}

