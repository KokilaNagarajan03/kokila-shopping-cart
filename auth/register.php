<?php
include "../config/db.php";

if(isset($_POST['register'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $pass=$_POST['password'];

  mysqli_query($conn,
   "INSERT INTO users(name,email,password)
    VALUES('$name','$email','$pass')"
  );
  header("Location: login.php");
}
?>
<form method="post">
<input name="name" placeholder="Name"><br>
<input name="email" placeholder="Email"><br>
<input name="password" placeholder="Password"><br>
<button name="register">Register</button>
</form>
