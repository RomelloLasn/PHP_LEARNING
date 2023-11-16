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


<form  method="get" action="index.php">
  <label>
    Search
    <input type="text"name="keywords" autocomplete="on">
  </label>
  <input type="submit" value="Search"><br>

  <? 

if (asset($_GET['query'])) {
  $search = $_GET['query'];
  $query = "SELECT title FROM books WHERE title LIKE '%$search'";
  $result = mysqli_query($d118824_bookstore, $query);

  if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<p>' . $row['name'] . '<php>';

    }

  }
  else {
    echo 'Error executing the query';
  }
}

?>

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
