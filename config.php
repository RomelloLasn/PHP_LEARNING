<?php
$host = 'd118824.mysql.zonevs.eu';
$db   = 'd118824_bookstore';
$user = 'd118824_rompsiks';
$pass = 'tc7gCcs0htQrzw9';
$charset = 'utf8mb4';

require_once("config.php");

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $options);
