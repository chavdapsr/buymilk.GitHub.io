 
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
<nav>
    <div class="menu">
      <input type="checkbox" id="check">
      <div class="logo"><a href="#">buymilk</a></div>
        <ul>
          <label class="btn cancel" for="check"><i class="fas fa-times"></i></label>
          <li><a href="#">Home</a></li>
          <li><a href="#">Shop</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Login</a></li>
        </ul>
        <label for="check" class="btn bars"><i class="fas fa-bars"></i></label>
      </div>
    </div>
  </nav>
  <div class="center">
    <div class="upper">
      Responsive Neumorphism Navigation Bar
    </div>
    <div class="lower">
    Using HTML and CSS Only
    </div>
  </div>
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
