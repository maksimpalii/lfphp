<?php
$dsn = "mysql:host=localhost;dbname=basic;charset=utf8";
$pdo = new PDO($dsn, 'root','');
$prepare = $pdo->prepare('SELECT * FROM users where id >:uslovie1 AND id <:uslovie2');
$id = 1;
$prepare->execute(['uslovie1' => $id, 'uslovie2'=> 15]);
$data = $prepare->fetchAll(PDO::FETCH_ASSOC);
print_r($data);
die();