<?php
require_once 'header.php';
 ?>


<?php
  if (isset($_SESSION['sessionId'])) {
    echo "You are logged in!";
  } else {
    echo "Home";
  }

 ?>

 <?php
 require_once 'footer.php';
  ?>
