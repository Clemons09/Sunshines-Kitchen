<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/menustyles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Menu</title>
  </head>
  <body>
    <div id="body-wrapper">
        <img id="food-image" src="images/food.jpg" alt="ingredients to make homemade pasta laid out on a table">
    </div>
    <div class="btn-group btn-group-justified">
      <a href="index.php" class="btn btn-primary">Home</a>
      <a href="order-form.php" class="btn btn-primary">Order Now</a>
    </div>
    <div id="menu-items">
      <div class="item">
        <h4>Food Item</h4>
        <img src="images/burger.jpg" alt="cheeseburger with all the fixings" height="100" width="100"><input id="maincheck1" type="checkbox" value="">
        <div id="fixings1">
        <ul>
          <li><input type="checkbox" value=""> Cheese</li>
          <li><input type="checkbox" value=""> Tomato</li>
          <li><input type="checkbox" value=""> Lettuce</li>
          <li><input type="checkbox" value=""> Pickle</li>
          <li><input type="checkbox" value=""> Onion</li>
        </ul>
      </div>
        <p>Item Description</p>
      </div>
      <div class="item">
        <h4>Food Item</h4>
        <img src="images/fries.jpg" alt="seasoned french fries" height="100" width="100"><input id="maincheck2" type="checkbox" value="">
        <div id="fixings2">
        <ul>
          <li><input type="checkbox" value=""> Unseasoned</li>
          <li><input type="checkbox" value=""> Cajun</li>
          <li><input type="checkbox" value=""> Bacon</li>
          <li><input type="checkbox" value=""> Cheese</li>
          <li><input type="checkbox" value=""> Jalapeños</li>
        </ul>
      </div>
        <p>Item Description</p>
      </div>
      <div class="item">
        <h4>Food Item</h4>
        <img src="images/milkshake.jpg" alt="chocolate milkshake" height="100" width="100"><input id="maincheck3" type="checkbox" value="">
        <div id="fixings3">
        <ul>
          <li><input type="checkbox" value=""> Chocolate Syrup</li>
          <li><input type="checkbox" value=""> Oreos</li>
          <li><input type="checkbox" value=""> Caramel</li>
          <li><input type="checkbox" value=""> Nuts</li>
          <li><input type="checkbox" value=""> Malted</li>
        </ul>
      </div>
        <p>Item Description</p>
      </div>
    </div>
    <script src="menu.js"></script>
    <div id="copyright"><p>Cody Lemons <br> Copyright &#169; 2020</p></div>
  </body>
</html>
