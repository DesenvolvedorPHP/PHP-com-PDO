<?php
// Executando comandos

try{
	
 $conn = new \PDO ("mysql:host=localhost;dbname=teste_oo","root","");
 
 $query = "select * from `products`";
 $ret = $conn->exec($query);
 print_r($ret);

}catch(\PDOException $e){
	
	echo "Error! Message:".$e->getMessage()." Code:".$e->getCode();
	
}