<?php

require_once 'vendor/autoload.php';


/* CREATE
$product = new \App\Model\Product();
$product->setName('iPhone 6');
$product->setDescription('Cinza Espacial, 64GB');
$productDao = new \App\Model\ProductDao();
$productDao->create($product);
*/






/* READ
$productDao = new \App\Model\ProductDao();
foreach ($productDao->read() as $value):
	echo $value['name']."<br>".$value['description']."<hr>";
endforeach;
*/






/*  UPDATE
$product = new \App\Model\Product();
$product->setId(5);
$product->setName('iPhone 6');
$product->setDescription('Cinza Espacial, 64GB');
$productDao = new \App\Model\ProductDao();
$productDao->update($product);
*/






/*  DELETE
$productDao = new \App\Model\ProductDao();
$productDao->delete(10);
*/



