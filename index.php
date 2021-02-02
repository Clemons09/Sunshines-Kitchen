<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="styles/indexstyles.css">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Sunshine's Kitchen</title>
  </head>
  <body>
    <div id="body-wrapper">
        <img id="food-image" src="images/food.jpg" alt="ingredients to make homemade pasta laid out on a table">
    </div>
  <div id="pagetop-wrapper">
    <div class="jumbotron">
      <h1>Sunshine's Kitchen</h1>
    </div>
  </div>
<div class="btn-wrap">
<div class="btn-group btn-group-justified">
  <a href="menu.php" class="btn btn-primary">View Menu</a>
  <a href="order-form.php" class="btn btn-primary">Order Now</a>
</div>
</div>
<div class="carousel slide" id="myCarousel" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/burger.jpg" alt="cheseburger">
      <div class="carousel-caption">
        <h3>Cheeseburger</h3>
        <p>House Cheeseburger Flame-Grilled to Perfection</p>
      </div>
    </div>
    <div class="item">
      <img src="images/fries.jpg" alt="french fries">
      <div class="carousel-caption">
        <h3>Seasoned French Fries</h3>
        <p>Hand-tossed, Seasoned French Fries</p>
      </div>
    </div>
    <div class="item">
      <img src="images/milkshake.jpg" alt="chocolate milkshake">
      <div class="carousel-caption">
        <h3>Chocolate Milkshake</h3>
        <p>House Milkshake</p>
      </div>
    </div>
  </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
    <script src="index.js"></script>
    <div id="copyright"><p>Cody Lemons <br> Copyright &#169; 2020</p></div>
  </body>
</html>
