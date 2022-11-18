<?php

 $server="localhost";
 $database="website";
 $username="root";
 $password="";
 $conn=mysqli_connect($server,$username,$password, $database);

 if (!$conn)
 {
    die("connection failed:".$conn->connect_error);
 }
    else{

      $qu="INSERT INTO `web`(`id`, `username`, `password`, `email`) VALUES ('5','buymilk','buymilk@#903366','buymilk@gmail.com')";
      if($conn->query($qu)==TRUE){
         echo"insert successfully!";
         $conn->close();
         }
         else{
            echo"insert failed".$conn->error;
            $conn->close();
         }
    }
   
 ?>