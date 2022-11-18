<?php

session_start();
include("config.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
  $username=mysqli_real_escape_string($db,$_POST['username']);
  $password=mysqli_real_escape_string($db,$_POST['password']);

  
  $sql=" select * from web where username='$username' and password='$password'";

  $result=mysqli_query($conn, $sql);
  $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
  $active=$row['active'];
  $count=mysqli_num_rows($result);

  if($count==1)
  {
   $login_session("username");
    $_SESSION['login_user']=$username;

    header("location:welcome.php");
    echo"<h1><center>login successful!</center></h1>";

  }else
  {
    $error="your login name or password is invalid";
  }
 exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log-in form</title>
    <link rel="stylesheet" href="signin/css/style.css">
</head>
<body>
    <div class="box">
        <form action="" method="post" name="login-form">
            <label for="username">Username</label><br>
            <input type="text" name="username" id="username" placeholder="Enter Username" class="input-box">
            <br><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" placeholder="Enter Password" class="input-box"></br>
            <div class="forget">
                <label class="checkbox-label">
                    <input type="checkbox">
                    <span class="checkbox-custom "></span>
                    <span class="label-text">Remember me</span>
                </label>
                <span class="fg">
                   <a href="#"> Forget password?</a>
                </span>
            </div>
            <button type="submit" class="btn" value="signing" name="signing"></button>
        </form>
           </div>
</body>
</html>
