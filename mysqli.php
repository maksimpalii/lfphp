<?php
$mysqli = new mysqli("localhost", "root", "", "basic");
if (mysqli_connect_errno()) {
    printf("Ошибка соедениния: %s\n", mysqli_connect_error());
    exit();
}
$name = 'user' . rand(0, 1000);
$email = $name . '@mail.ru';
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
$result = $mysqli->query($sql);


$sql = "select * from users";
$result = $mysqli->query($sql);
if ($result->num_rows) {
    $data = $result->fetch_all();
    echo "<pre>";
    print_r($data);
    die();
} else {
    echo "Біл запрос без данных";
}