<?php

$conn = new PDO("mysql:dbname=devphp7;host=localhost", "root", "");

$mypdo = $conn->prepare("INSERT INTO tb_users (login, pass) VALUES (:LOGIN, :PASSWORD)");

$login = "person";
$password = "abc123";

$mypdo->bindParam(":LOGIN", $login);
$mypdo->bindParam(":PASSWORD", $password);


$mypdo->execute();


echo "OK";
