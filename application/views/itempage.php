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


    <div class="container">
    	<center>
    	<div id="thumbs" class='center-block'>
			<img id='T1F' src="/assets/currentProducts/<?= $itemInfo['front_image_filename']?>">
			<img id='T1B' src="/assets/currentProducts/<?= $itemInfo['back_image_filename']?>">
		</div>		
		<div id='leftside' class='center-block'>		
			<img id='MT1' src="/assets/currentProducts/<?= $itemInfo['front_image_filename']?>" height='460'>
		</div>

		<div id="rightside">
			<h3><?= $itemInfo['name']?></h3>
			<h5><p class='bold'>$<?= $itemInfo['price'] ?></p></h5>	

			<form id = 'cart' action='/products/add_to_cart' method='post'>
				<div id="sizes"> 
				<input type = 'hidden' name = 'product_id' value = '<?= $itemInfo['id']?>'>
      				<select name ='size' form = 'cart'>
      					<option class="btn btn--lg btn--full u-no-wrap u-padding-l--none u-padding-r--none">Pick Your Size</option>
	    				<option name='size' value='xs'>X-Small</option>
	    				<option name='size' value='s'>Small</option>
	    				<option name='size' value='m'>Medium</option>
	    				<option name='size' value='l'>Large</option>
	    				<option name='size' value='xl'>X-Large</option>
      				</select>
				</div><br>

				<div id="quantity">    	
      				<select name = 'quantity' form = 'cart'>
      					<option class="btn btn--lg btn--full u-no-wrap u-padding-l--none u-padding-r--none">Quantity</option>
	    				<option name='quantity' value='1'>One</option>
	    				<option name='quantity' value='2'>Two</option>
	    				<option name='quantity' value='3'>Three</option>
	    				<option name='quantity' value='4'>Four</option>
	    				<option name='quantity' value='5'>Five</option>				
  					</select> 
				</div>
				<input id="addtobagbutton" class="btn btn--lg btn--full u-no-wrap u-padding-l--none u-padding-r--none" type="submit" value="ADD TO BAG" onclick="" style="overflow: visible;">				
			</form>
			<div id='description'>
				<h4>Description</h4>
					<h5><?= $itemInfo['description']?></h5>
			</div>
		</div>

		
	</div>
		

		<div id="bottom">
			<h2>Other Items You Might Like...</h2>

			<!-- item['gender'] -->

			<?php
			foreach($items as $randomItem) {
			?>

			<div class="extra">
				<a href="/itemDetails/<?=$randomItem['id']?>"><img id='<?= $randomItem['id'] ?>' class='suggest' src="/assets/currentProducts/<?= $randomItem['front_image_filename']?>" data-alt-src='/assets/currentProducts/<?= $randomItem['back_image_filename']?>'></a>
				<h6><?= $randomItem['name'] ?></h6>
				<p class='bold'>$<?= $randomItem['price'] ?></p>
			</div>

			<?php
			}
			?>



		</div>
	</div>
    </div>



<?php $this->load->view('partials/footer'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<script type="text/javascript">
		$(document).ready(function(){

			$('img').hover(function() {
				var temp = $(this).attr('src');
				$(this).attr("src", $(this).attr('data-alt-src'));
				$(this).attr("data-alt-src", temp);
			});		
			$('#MT1').hover(function() {
				var temp = $(this).attr('src');
				$(this).attr("src", $(this).attr('data-alt-src'));
				$(this).attr("data-alt-src", temp);
			});		
			$('#T1F').hover(function() {
				$('#MT1').attr("src", $(this).attr('data-alt-src'));
			});		
			$('#T1B').hover(function() {
				$('#MT1').attr("src", $(this).attr('data-alt-src'));
			});
		});
	</script>
</body>
</html>