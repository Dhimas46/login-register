<?php
require_once 'header.php';
 ?>
<div class="">
  <h1>Register</h1>
  <p>Already have an account? <a href="login.php">Login!</a> </p>
  <form action="register-inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="confirmPassword" placeholder="Password">
    <button type="submit" name="submit">REGISTER</button>
  </form>
</div>

 <?php
 require_once 'footer.php';
  ?>
