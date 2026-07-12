<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist!';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }else{
         mysqli_query($conn, "INSERT INTO `user_form`(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');
         $message[] = 'registered successfully!';
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>

<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <label for="name" class="sr-only">Username</label>
      <input type="text" id="name" name="name" placeholder="enter username" class="box" required>
      <label for="email" class="sr-only">Email</label>
      <input type="email" id="email" name="email" placeholder="enter email" class="box" required>
      <label for="password" class="sr-only">Password</label>
      <input type="password" id="password" name="password" placeholder="enter password" class="box" required>
      <label for="cpassword" class="sr-only">Confirm Password</label>
      <input type="password" id="cpassword" name="cpassword" placeholder="confirm password" class="box" required>
      <input type="submit" name="submit" value="register now" class="btn">
      <p>already have an account? <a href="login.php">login now</a></p>
   </form>

</div>

</body>
</html>
