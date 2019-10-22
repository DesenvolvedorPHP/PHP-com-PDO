<?php

$conn = new PDO("mysql:dbname=devphp7;host=localhost", "root", "");

$mypdo = $conn->prepare("DELETE FROM tb_users WHERE id = :ID");


$id = 4;

$mypdo->bindParam(":ID", $id);



$mypdo->execute();


echo "OK";
