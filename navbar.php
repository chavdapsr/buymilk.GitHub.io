
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> NavBar</title>
    <link rel="stylesheet" href="style.css">
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
    <style>
     * {
  margin: 0%;
  padding: 0%;
}

body {
  height: 100vh;
  display: flex;
  justify-content: center;
  font-weight: bold;
  font-family: "lato", sans-serif;
  background-color: #E0E0E0;
}

.navbar {
  height: 80px;
  width: 100%;
  background-color: #E0E0E0;
  margin: 50PX;
  border-radius: 11PX;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  box-shadow: 10px 10px 25px #bdbdbd, -10px -10px 25px #ffffff;
}

ul {
  display: flex;
  justify-content: center;
  align-items: center;
  list-style-type: none;
}

li a {
  margin: 15px;
  color: gray;
  margin-right: 10px;
  padding: 10px 15px 10px 15px;
  border-radius: 5px;
  text-decoration: none;
}
nav ul li a {
  color:content: '\f37b';
  text-decoration: none;

}
nav ul li a:hover {
 
  color: #333;
  box-shadow: 6px 6px 10px #d1d9e6, -6px -6px 10px #f9f9f9;
  transform: scale(0.985);
  transition: 0.25s;
  text-decoration: none;
  box-shadow: -2px -2px 6px rgba(255, 255, 255, .6), -2px -2px 4px rgba(255, 255, 255, .4), 2px 2px 2px rgba(255, 255, 255, .05), 2px 2px 4px rgba(0, 0, 0, .1);
  transition:all .4s ease-in-out;
  animation: up-bump 0.4s ease-in-out;

}

    </style>
   </head>

          <!-- Designing by psr -->

<body>
<div class="navbar">
      <ul>
        <li><a href="" class="">Home</a></li>
        <li><a href="" class="">cart</a></li>
        <li><a href="profile/aboutcard.html" class="">about</a></li>
        <li><a href="contact/contact.html" class="">contact</a></li>
        <li><a href="signin/index.html" class="">login</a></li>
        <li><a href="sign-up/signup.html" class="">signup</a></li>
      </ul>
    </div>
  <?php 
    require('footer.php');
?>
</body>
</html>
