<?php

$conn = new PDO("mysql:dbname=devphp7;host=localhost", "root", "");

$conn->beginTransaction();


$mypdo = $conn->prepare("DELETE FROM tb_users WHERE id = ?");


$id = 3;


$mypdo->execute(array($id));

//Cancelar a Transação
$conn->rollback();

//Confirmar a Transação
$conn->commit();


echo "OK";
