<?php
$dsn = "mysql:host=localhost;dbname=basic;charset=utf8";
$pdo = new PDO($dsn, 'root','');
$prepare = $pdo->prepare('SELECT * FROM users where id =:uslovie1');
$id = $_REQUEST['id'];
$prepare->execute(['uslovie1' => $id]);
//$data = $prepare->fetchAll(PDO::FETCH_ASSOC);
$data = $prepare->fetch(PDO::FETCH_ASSOC);
echo json_encode($data);
die();