<?php
// Criando uma conexão a um Banco de Dados com PDO

try{
	
$conn = new \PDO ("mysql:host=localhost;dbname=teste_oo","root","");

}catch(\PDOException $e){
	
	echo "Error! Message:".$e->getMessage()." Code:".$e->getCode();
	
}