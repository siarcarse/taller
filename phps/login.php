<?php
session_start();
include 'config/db.conf.php';

$db = pg_connect("host=$host port=$port dbname=$dbname user=$username password=$password") or die('connection failed');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT pk FROM users WHERE username='$username' AND password = '$password'";
$result = pg_query($db, $sql) or die('SQL ERROR 1: ' . pg_last_error());
$data = pg_fetch_array($result);
if($data['pk']) {
    $_SESSION['UserId'] = $data['pk'];
    echo "ok";
}else {
    echo "error";
}
?>