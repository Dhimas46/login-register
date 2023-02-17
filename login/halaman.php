<?php
include 'database.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>
    <?php
      $sql = "SELECT * FROM users";
      $result = mysqli_query($conn, $sql);
      $rowCount = mysqli_num_rows($result);

      if ($rowCount > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo $row['username']. "<br>";
        }
        } else{
          echo "No results found.";
        }


     ?>
