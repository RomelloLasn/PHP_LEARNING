<?php
require_once("connect.php");
require_once("config.php");

 $id = $_GET["id"];


$stmt = $pdo->prepare("SELECT * FROM books WHERE id = :id");
$stmt->execute(['id' => $id]);
$book = $start->fetch();

var_dump($book);
