<?php
require_once 'header.php';
 ?>
<div class="">
  <h1>Login</h1>
  <p>No account? <a href="register.php">Register here!</a> </p>
  <form class="" action="login-inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit" name="submit">LOGIN</button>
  </form>
</div>

 <?php
 require_once 'footer.php';
  ?>
