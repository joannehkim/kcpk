<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KCPK</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="/assets/home_view_style.css">
  </head>

  <body>

  <?php
    $this->load->view('/partials/header.php');
  ?>


  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <a href="/products/newArrivals"><img src="/assets/bomber.jpg" alt="Chania"></a>
      </div>
      <div class="item">
        <a href="/products/womenOuterwears"><img src="/assets/denim.jpg" alt="Chania"></a>
      </div>
      <div class="item">
        <a href="/products/menTees"><img src="/assets/arrivals.jpg" alt="Flower"></a>
      </div>
    </div>
  
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <div class="container_top">
    <div class="col-md-4 col-md-offset-2">
      <div class="shop">
        <a href="/WShirts">SHOP WOMEN</a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="shop">
       <a href="/MShirts">SHOP MEN</a>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="col-md-4 subcontent">
      <img src="/assets/adidas.png" class="img-responsive">
      <img src = '/assets/image_2.png'>
      <div class="shop_bottom">
      <a href="/products/womenOuterwears">SHOP OUTERWEAR</a>
      </div>
   </div>
    <div class="col-md-4 subcontent">
      <img src="/assets/denim.png" class="img-responsive">
      <img src = '/assets/image_1.png'>
      <div class="shop_bottom">
      <a href="/products/newArrivals">SHOP NEW ARRIVALS</a>
      </div>
   </div>
    <div class="col-md-4 subcontent">
      <img src="/assets/basics.png" class="img-responsive">
      <img src = '/assets/image_3.png'>
      <div class="shop_bottom">
       <a href="/products/menTees">SHOP SHIRTS</a>
      </div>
   </div>
  </div>


<?php $this->load->view('/partials/footer');?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>