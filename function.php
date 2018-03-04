<?php
function getUsers(){
$dsn = "mysql:host=localhost;dbname=basic;charset=utf8";
$pdo = new PDO($dsn, 'root','');
$prepare = $pdo->prepare('SELECT * FROM users LIMIT 10');
$prepare->execute();
$data = $prepare->fetchAll(PDO::FETCH_ASSOC);
echo "<ul class='users'>";
foreach ($data as $key => $value){
    echo "<li>" . $value['name'] . " ";
    echo $value['email'] . "</li>";
};
echo "</ul>";
die();
}