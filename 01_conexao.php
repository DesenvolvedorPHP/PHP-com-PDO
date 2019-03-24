<?php
// Banco de Dados - PDO
// Criando uma conexão com um Banco de Dados utilizando PDO

try{
	
	$conn = new \PDO ("mysql:host=localhost;dbname=teste_oo","root","");

}catch(\PDOException $e){
	
	echo "Error! Message:".$e->getMessage()." Code:".$e->getCode();
	
}
