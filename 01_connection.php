<?php 

$conn = new PDO("mysql:dbname=devphp7;host=localhost", "root", "");

$mypdo = $conn->prepare("SELECT * FROM tb_users ORDER BY login");

$mypdo->execute();


$results = $mypdo->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
	
	foreach ($row as $key => $value) {
		
		echo "<strong>".$key."<strong>" .$value."<br />";
	}

	echo str_repeat("=", 25)."<br />";
}




