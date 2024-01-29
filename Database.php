<?php
/**
 * 
 */
class Database
{
	private static $dbHost="localhost";
	private static $dbName="booking";
	private static $dbUser="root";
	private static $dbPassword="";
	
	private static $connection=null;



	public static function connect()
	{
		// code...
		try {
			self::$connection = new PDO ("mysql:host=". self::$dbHost . ";dbname=". self::$dbName.";charset=utf8mb4",self::$dbUser,self::$dbPassword);

		} catch (PDOException $e) {
			die($e->getMessage());
		}
		return self::$connection;
	}

	public static function disconnect(){
		self::$connection = null;
	}
}