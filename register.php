<?php
require_once('authentication.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign-in form</title>
    <link rel="stylesheet" href="signin/css/style.css">
</head>
<body>
    <div class="box" action="authentication.php" method="post">
        <form action="connection.php" method="post" name="login-form">
            <label for="username">Username</label><br>
            <input type="text" name="username" id="username" placeholder="Enter Username" class="input-box">
            <br><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" placeholder="Enter Password" class="input-box"><br>
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