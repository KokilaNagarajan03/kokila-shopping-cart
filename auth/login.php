<?php
include "../config/db.php";

if(isset($_POST['login'])){
  $email=$_POST['email'];
  $pass=$_POST['password'];

  $q=mysqli_query($conn,
   "SELECT * FROM users WHERE email='$email' AND password='$pass'"
  );

  if(mysqli_num_rows($q)==1){
    $_SESSION['user']=$email;
    header("Location: ../user/index.php");
  }else{
    echo "Invalid login";
  }
}
?>
<form method="post">
<input name="email" placeholder="Email"><br>
<input name="password" placeholder="Password"><br>
<button name="login">Login</button>
</form>
