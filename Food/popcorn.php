<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="popcorn.css">
</head>
<main>
  <h1>PopCorn package</h1>
  <div class="app-content-field">
        <div class="product-box medium" style="height:100%;">
        <img class="product-box-image" src="/Assignment 2/Mainpage/assets/img/Movie/Barbie Movie.jpeg" alt="Product" data-price="25.99">
        <div class="product-box-details">Combo Set <span>100</span></div>
          <div class="image-overlay" alt="Product" data-price="2010.99" >
            <p class="image-text">Hover Text</p>
          </div>
        </div>

    <div class="product-boxes">
      <div class="product-box-wrapper three">
        <div class="product-box medium">
          <img class="product-box-image" src="/Assignment 2/Mainpage/assets/img/Movie/Barbie Movie.jpeg" alt="Product" data-price="25.99">
          <div class="product-box-details">Combo Set <span>1</span></div>
          <div class="image-overlay" alt="Product" data-price="200.99" >
            <p class="image-text">Hover Text</p>
          </div>
        </div>

        <div class="product-box medium">
          <img class="product-box-image" src="/Assignment 2/Mainpage/assets/img/Movie/Barbie Movie.jpeg" alt="Product" data-price="25.99">
          <div class="product-box-details">Combo Set <span>2</span></div>
          <div class="image-overlay" alt="Product" data-price="25.99">
            <p class="image-text">Hover Text</p>
          </div>
        </div>

        <div class="product-box medium">
          <img class="product-box-image" src="/Assignment 2/Mainpage/assets/img/Movie/Barbie Movie.jpeg" alt="Product" data-price="25.99">
          <div class="product-box-details">Combo Set <span>2</span></div>
          <div class="image-overlay" alt="Product" data-price="25.99">
            <p class="image-text">Hover Text</p>
          </div>
        </div>

      </div>

      <div class="product-box-wrapper two">
        <div class="product-box medium">
          <img class="product-box-image" src="/Assignment 2/Mainpage/assets/img/Movie/Barbie Movie.jpeg" alt="Product" data-price="25.99">
          <div class="product-box-details">Combo Set <span>3</span></div>
          <div class="image-overlay" alt="Product" data-price="25.99">
            <p class="image-text">Hover Text</p>
          </div>
        </div>

        <div class="product-box medium">
          <img class="product-box-image" src="/Assignment 2/Mainpage/assets/img/Movie/Barbie Movie.jpeg" alt="Product" data-price="25.99">
          <div class="product-box-details">Combo Set <span>4</span></div>
          <div class="image-overlay" alt="Product" data-price="25.99">
            <p class="image-text">Hover Text</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</main>

<div class="cd-cart-container empty">
  <a href="#0" class="cd-cart-trigger">
    Cart
    <ul class="count">
      <!-- cart items count -->
      <li>0</li>
      <li>0</li>
    </ul> <!-- .count -->
  </a>

  <div class="cd-cart">
    <div class="wrapper">
      <header>
        <h2>Cart</h2>
      </header>

      <div class="body">
        <ul>
          <!-- products added to the cart will be inserted here using JavaScript -->
        </ul>
      </div>

      <footer>
        <form action="test.php" method="post">
          <input type="hidden" name="final_price" id="final_price" value="0">
          <button name="bill" class="checkout btn"><em>Checkout - $<span id="final_price_display">0</span></em></button>
        </form>
      </footer>
    </div>
  </div> <!-- .cd-cart -->
</div> <!-- cd-cart-container -->

<script src="food.js"></script>

</html>
