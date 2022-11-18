<?php
  session_start();
  include('connection.php');
  $username=$_POST['username'];
  $password=$_POST['password'];

  $username=stripslashes($username);
  $password=stripslashes($password);
  $username=mysqli_real_escape_string($conn, $username);
  $password=mysqli_real_escape_string($conn, $password);

  $sql=" select * from web where username='$username' and password='$password'";

  $result=mysqli_query($conn, $sql);
  $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count=mysqli_num_rows($result);

  if($count==1)
  {
    echo"<h1><center>login successful!</center></h1>";
    header("location:welcome.php");
  }else{
    echo"<h1><center>login failed! : invalid username and password</center></h1>";
  }
  exit();
  
?>