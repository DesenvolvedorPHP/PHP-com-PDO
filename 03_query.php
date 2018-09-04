<?php


try{
	
 $conn = new \PDO ("mysql:host=localhost;dbname=teste_oo","root","");
 

 $query = "select * from `products`";
 $stmt = $conn->query($query);
 $list = $stmt->fetchAll();
 echo $list[0]['nome'];
 //echo $list[0][2];
 //print_r($list); 
 
 
 

}catch(\PDOException $e){
	
	echo "Error! Message:".$e->getMessage()." Code:".$e->getCode();
	
}