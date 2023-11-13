<?php

require_once("connect.php");



$stmt = $pdo->query('SELECT * FROM books WHERE is_deleted = 0');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
<form style="text-align:center;" method="get" action="index.php">
  <label>
    Search
    <input type="text"name="keywords" autocomplete="off">
  </label>
  <input type="submit" value="Search"><br>
</form>

<?php
while ($row = $stmt->fetch()) {
    ?> 
    <li>
        <a href="book.php?id=<?= $row["id"]; ?>">
        <?=$row['title']; ?>
        
    </a>
    
    </li>;

<?php    
}
?>

</body>
</html>

<?php
