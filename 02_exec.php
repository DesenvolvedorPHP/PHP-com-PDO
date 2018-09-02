<?php
// O comando EXEC realiza execuções das Query’s definidas

try{
	
 $conn = new \PDO ("mysql:host=localhost;dbname=teste_oo","root","");
 
 /*
 $query = "select * from `products`";
 $ret = $conn->exec($query);
 print_r($ret); // retorna o numero de linhas afetadas = 0
 */
 
 // inserir dados no banco
 $query = "insert into `products` (`nome`,`descr`) values ('eBook','Learn JavaScript')";
 $ret = $conn->exec($query);
 print_r($ret); // retorna o numero de linhas afetadas = 1
 
 
 

}catch(\PDOException $e){
	
	echo "Error! Message:".$e->getMessage()." Code:".$e->getCode();
	
}