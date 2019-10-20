<?php 

$conn = new PDO("mysql:dbname=devphp7;host=localhost", "root", "");

$mypdo = $conn->prepare("SELECT * FROM tb_users ORDER BY deslogin");

$mypdo->execute();

$results = $mypdo->fetchAll(PDO::FETCH_ASSOC);

var_dump($results);