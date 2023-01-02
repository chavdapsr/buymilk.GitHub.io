 
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" http-equiv="Content-Type" content="width=device-width, initial-scale=1.0" />
    <title>navbar</title>
    <link rel="stylesheet" href="style.css">

  </head>

          <!-- Designing by psr -->

<body>
<nav class="nav">
    <div class="container">
        <div class="logo">
            <a href="home.php">buymilk</a>
        </div>
        <div class="main_list" id="mainListDiv">
            <ul>
                <li><a href="cart.php">shop</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="contact.php">contact</a></li>
                <li><a href="login.php">login</a></li>
                <li><a href="register.php">signup</a></li>
                <li><a href="profile.php">profile</a></li>
            </ul>
        </div>
        <div class="media_button">
            <button class="main_media_button" id="mediaButton">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</nav>
    
<section class="home"></section>
<!-- partial -->
 <script>
var mainListDiv = document.getElementById("mainListDiv"),
    mediaButton = document.getElementById("mediaButton");

mediaButton.onclick = function () {
    
    "use strict";
    
    mainListDiv.classList.toggle("show_list");
    mediaButton.classList.toggle("active");
    
};

 </script>
</body>
</html>
