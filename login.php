<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" http-equiv="Content-Type" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">
  </head>
<body>
    <div class="box">
        <br name="f1" action = "authentication.php" method="post" onsubmit = "return validation()" id="frmLogin" >
        <div class="error-message"></div>

            <label for="username">Username</label><br>
            <input type="text" name="user" id="user" placeholder="Enter Username" class="input-box">
         </br></br>
            <label for="username">Password</label><br>
            <input type="password" name="pass" id="pass" placeholder="Enter Password" class="input-box"></br>
            <div class="forget">
                <label class="checkbox-label">
                    <input type="checkbox" name="remember" id="remember">
                    <span class="checkbox-custom "> 
                 </span>
                    <span class="label-text"  for="remember-me">Remember me</span>
                    
                
                </label>
                <span class="fg">
                   <a href="forgetpass.php"> Forget password?</a>
                </span>
            </div>
            <button type="submit" class="btn" name=
            "submit" id = "btn" value = "Login">Sign In</button>
        </form>
        <span class="option">or sign in with</span>
        <div class="social">
            <div class="box-radius">
                <img src="images/fb.png" alt="">
            </div>
            <div class="box-radius">
                <img src="images/google.png" alt="">
            </div>
            <div class="box-radius">
                <img src="images/linkedin.png" alt="">
            </div>
            <div class="box-radius">
                <img src="images/twitter.png" alt="">
            </div>
        </div>
    </div>
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>
</html>