<?php

require_once("config.php");
require_once("connect.php");


$id = $_GET["id"];
$sql = "DELETE FROM books WHERE id = :id";
$stmt = $pdo->prepare('SELECT * FROM books WHERE id = :id');
$stmt->execute(['id' => $id]);
$book = $stmt->fetch();

$stmt = $pdo->query('SELECT * FROM authors ');
$book = $stmt->fetch();

var_dump($_POST);
if ( isset($_POST["submit"]) && $_POST["submit"] == "save" ) {
    $stmt = $pdo->prepare('UPDATE books SET title = :title, release_date = :release_date WHERE id = :id,');
    $stmt->execute(['title' => $_POST["title"], "id" => $id, 'release_date' => $_POST["year"],]);
    
    header("Location: book.php?id={$id}");

}


?>

<h1>Muuda</h1> <?= $id;?> <?= $book["title"]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="./edit.php?id=<?= $id; ?>" method="post">
   Pealkiri:  <input type="text" name="title" value="<?= $book["title"];?>">
   <br><br>
   Aasta: <input type="text" name="year"  value="<?= $book["release_date"];?>">
   <br><br>
   Autorid:<?= $book["authors"];?>
   <br><br>
   <form action="edit.php">
   <select name="authors" id="">
   <?php

while ($row = $stmt->fetch()) { 
?> 
 <option value="">
    <?=$row['first_name'];?>
    <?=$row['last_name'];?>
 </option>;
 
 <?php
}
?>
   </select>
    
    
        
</form>
   
<button type="submit" name="submit"  value="save">Salvesta</button>
<button type="submit" name="submit"  value="delete">Kustuta</button>
</form>




</body>
</html>
