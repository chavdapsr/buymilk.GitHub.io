
<!DOCTYPE html>
<html lang="en">
<head>
    <title>shopping cart</title>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="CodeHim">
    <meta name="viewport" http-equiv="Content-Type" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <!-- Demo CSS (No need to include it into your project) -->
	<link rel="stylesheet" href="css/demo.css">
    
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" href="css/cart.css">
   
    </head>
<body>
      <!-- Start DEMO HTML (Use the following code into your project)-->
   <header class="header">
        <div class="container header__top">
         
    <div class="logo">
            <a href="index.php">buymilk</a>
        </div>
       
    <div class="header__cart">
      <ul>
        <li class="header__submenu" id="submenu">
          <button class="header__cart-btn" id="toggle-cart-btn" onclick="myfunction"><svg class="cart" width="24" height="24" viewBox="0 0 24 24">
  <path d="M17,18C15.89,18 15,18.89 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20C19,18.89 18.1,18 17,18M1,2V4H3L6.6,11.59L5.24,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42A0.25,0.25 0 0,1 7.17,14.75C7.17,14.7 7.18,14.66 7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.58 17.3,11.97L20.88,5.5C20.95,5.34 21,5.17 21,5A1,1 0 0,0 20,4H5.21L4.27,2M7,18C5.89,18 5,18.89 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20C9,18.89 8.1,18 7,18Z"></path>
</svg>Cart</button>
          <div id="shopping-cart" class="shopping-cart-container" style="right: 0; top: 100px">
            <table id="cart-content">
              <thead>
                <tr>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th></th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
            <p class="total-container" id="total-price"></p>
            <a href="#" id="checkout-btn" class="cart-btn">Checkout</a>
            <a href="#" id="clear-cart" class="cart-btn">Clear Cart</a>
          </div>
        </li>
      </ul>
    </div>
  </div> 
  </header>

   
<main class="container page-content">
  
  <div class="grid" id="grid">
    <div class="card single-product">
      <img src="images/dish-1.png" class="card__image product-thumb" alt="">
      <div class="card__info">
        <h4 class="card__title">fresh milk</h4>
        <p class="card__text">one litre milk</p>
        <p class="card__price">rs.65/-</p>
        <button class="card__btn add-to-cart" data-id="6">Add to Cart</button>
      </div>
    </div>
    <!--.card-->
    <div class="card single-product">
      <img src="images/dish-2.png" class="card__image  product-thumb" alt="">
      <div class="card__info">
        <h4 class="card__title">fresh butter milk</h4>
        <p class="card__text">one litre butter milk</p>
        <p class="card__price">rs.55/-</p>
        <button class="card__btn add-to-cart" data-id="7">Add to Cart</button>
      </div>
    </div>
    <!--.card-->
    <div class="card single-product">
      <img src="images/dish-3.png" class="card__image  product-thumb" alt="">
      <div class="card__info">
        <h4 class="card__title">fresh ghee</h4>
        <p class="card__text">one kg ghee</p>
        <p class="card__price">rs.650/-</p>
        <button class="card__btn add-to-cart" data-id="8">Add to Cart</button>
      </div>
    </div>
    <!--.card-->
    <div class="card single-product">
      <img src="images/dish-4.png" alt="" class="card__image  product-thumb">
      <div class="card__info">
        <h4 class="card__title">fresh dahi</h4>
        <p class="card__text">one kg dahi</p>
        <p class="card__price">rs.55/-</p>
        <button class="card__btn add-to-cart" data-id="9">Add to Cart</button>
      </div>
    </div>
        </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script  src="./js/script.js"></script>
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