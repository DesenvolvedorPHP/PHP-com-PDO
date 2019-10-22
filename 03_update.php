<?php

$conn = new PDO("mysql:dbname=devphp7;host=localhost", "root", "");

$mypdo = $conn->prepare("UPDATE tb_users SET login = :LOGIN, pass = :PASSWORD WHERE id = :ID");


$id = 2;
$login = "admin";
$password = "@abc123";

$mypdo->bindParam(":ID", $id);
$mypdo->bindParam(":LOGIN", $login);
$mypdo->bindParam(":PASSWORD", $password);


$mypdo->execute();

echo "OK";
