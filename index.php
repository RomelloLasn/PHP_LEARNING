<?php
$stmt = $pdo->query('SELECT title FROM books');
require_once("connect.php");
require_once("config.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello php</title>
</head>
<body>
<?php 

while ($row = $stmt->fetch()) {
    ?>
    <a href="books.php?id=<?= $row["id"]; ?>">
    <?=$row['title']; ?>
    </a>
    <li>
</li>;
    <?php
}
    

    ?>


  

</body>

</html>
