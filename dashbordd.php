<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;";

$pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$stmt1 = $pdo->prepare("SELECT * FROM userdata WHERE uids=?");
$stmt1->execute([$user_id]);
$data1 = $stmt1->fetchAll();

$stmt2 = $pdo->prepare("SELECT * FROM activity WHERE uids=?");
$stmt2->execute([$user_id]);
$data2 = $stmt2->fetchAll();

?>
