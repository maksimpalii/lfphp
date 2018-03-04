<?php
$dsn = "mysql:host=localhost;dbname=basic;charset=utf8";
$pdo = new PDO($dsn, 'root','');
$stmt = $pdo->query('SELECT * FROM users');
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($result);
die();