<?php
include 'config.php'; 
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
    $pass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

    $select = mysqli_query($conn, "SELECT * FROM 'user_form'WHERE email = '$email' AND password = '$pass'") or die('query failed');
}
if(mysqli_num_rows($select) > 0){
    $message[] = 'user already exist!';
}else{
mysqli_query($conn, "INSERT INTO 'user_form'(name,email,password)VALUES('$name','$email','$pass')")or die('query failed');
$message[] = 'registered successfully!';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
if(isset($message)){
    foreach($message as $message){
        echo '<div class="message" onclick="this.remove()";>' .$message.'</div>';
    }
}

?>
<div class="form-container"> 
<form action="" method="post">
    <h3>register now</h3>
    <label for="name" class="sr-only">username</label>
    <input type="text" id="name" name="name" required placeholder="enter username" class="box">
    <label for="email" class="sr-only">email address</label>
    <input type="email" id="email" name="email" required placeholder="enter email" class="box">
    <label for="password" class="sr-only">password</label>
    <input type="password" id="password" name="password" required placeholder="enter password" class="box">
    <label for="cpassword" class="sr-only">confirm password</label>
    <input type="password" id="cpassword" name="cpassword" required placeholder="confirm password" class="box">
    <input type="submit" name="submit" class="btn" value="register now">
    <p>already have an account? <a href="login.php">login now</a></p>
</form>

</div>

</body>
</html>
