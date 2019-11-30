<?php 


namespace App\Model;


class Connect
{
	private static $instance;

	// Este metodo verifica se ja existe uma instancia da conexão
	public static function getConn()
	{
		if(!isset(self::$instance)):
			self::$instance = new \PDO('mysql:host=localhost;dbname=db_devphp7;charset=utf8','root','');
		endif;
		return self::$instance;
		
		/*   OR   */
		
		try{
            		self::$instance = new \PDO('mysql:host=localhost;dbname=testedev', 'root','');
            		return self::$instance;
        	}catch (\Exception $e){
            		$e->getMessage();
        	}

	}

	
}
