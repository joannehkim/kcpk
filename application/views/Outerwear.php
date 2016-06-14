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

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
    </div>
  </div>
</nav>


  <div class="container_top">
    <div class="col-md-4">
      <div class="shop_category">
        <h3 class="category_title">Category</h3>
            <h5 class="category_header">WOMEN</h5>
                <ul>
                 <li><a class="type" href="/products/womenTees">Shirts</a></li>
                    <li><a class="type" href="/products/womenOuterwears">Outerwear</a></li>
                </ul>
                <br>
            <h5 class="category_header">MEN</h5>
                <ul>
                    <li><a class="type" href="/products/menTees">Shirts</a></li>
                    <li><a class="type" href="/products/outerwear">Outerwear</a></li>
                </ul>
      </div>
    </div>

    <div class="col-md-8">
      <div class="rightSide">
            <h3 class="page_title">MEN OUTERWEAR</h3>
                <form action = '/Products/sortMenOuterwear' method = "POST" id="womentees">
                    <label class="label">SORT BY:</label>
                    <select class="turnintodropdown" name ="sort_by" onchange='this.form.submit()'>
                    <option>Please select</option>
                    <option value = 'created_at'>New Arrivals</option>
                    <option value = 'price'>Price: High to Low</option>
                    </select>
                </form>
            
            <div class="classContent rightSide">
        <?php 
            foreach($menOuterwear as $jacket ){

        ?>

            <div class="product">
                <a href="/itemDetails/<?=$jacket['id']?>"><img id = '<?= $jacket['id'] ?>' class="picSize" src="/assets/currentProducts/<?= $jacket['front_image_filename']?>" alt="Tee 1" data-alt-src='/assets/currentProducts/<?= $jacket['back_image_filename']?>'/></a>
                <h6><?= $jacket['name']?></h6>
                <p class='bold'>$<?= $jacket['price']   ?></p>
            </div>


        <?php
            }
        ?>
</div>
    </div>
    </div>
  </div>


<?php $this->load->view('/partials/footer');?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <script type="text/javascript">
       $(document).ready(function(){
          $('img').hover(function(){
            var temp = $(this).attr("src");
            var newimage = $(this).attr("data-alt-src");
            $(this).attr("src", newimage);
            $(this).attr("data-alt-src",temp);
          }, function(){
            var temp = $(this).attr("src");
            var newimage = $(this).attr("data-alt-src");
            $(this).attr("src", newimage);
            $(this).attr("data-alt-src",temp);
          });
       });
   </script>

</body>
</html>