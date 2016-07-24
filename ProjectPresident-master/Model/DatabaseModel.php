<?php
/**
 *
* @brief	class Database established the connection with the database, as we know that the connection is the most important thing in our project;
* 			using Singleton design pattern, as we have one instanse of the object
*
* @author Learner.
*
*/
class Database
{
	/**
	 * @var const	USER
	 */
	const USER = 'root';

	/**
	 *
	 * @var const	PASSWORD
	 */
	const PASSWORD = '';

	/**
	 * @var	const HOST
	 */
	const DB_NAME = 'president';
	
	/**
	 * @var	const HOST
	 */
	const HOST = 'localhost';

	/**
	 * @var	\pdo connection;
	 */
	public static $connection = null;
	/**
	 *
	 *	@brief	private function that is creating connection as default and no params.
	 */
	private function __construct()
	{

	}

	/**
	 *
	 *@brief	creating the database as an object, if null do the connection with params;
	 *
	 * @return	pdo connection;
	 */
	public static function getInstance()
	{
		if ( self::$connection === NULL )
		{
			self::$connection = new PDO( 'mysql:host =' . self::HOST . ';dbname='. self::DB_NAME, self::USER, self::PASSWORD );
		}

		return self::$connection;
	}

}

?>