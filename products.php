<?php

	$pdo = new PDO('mysql:host=localhost;dbname=products;charset=utf8', 'root', '');

	$statement = $pdo->query('SELECT * FROM products');
	$statement->execute();
	echo json_encode($statement->fetchAll(PDO::FETCH_ASSOC));